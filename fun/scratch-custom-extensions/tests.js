//Test, only in beta.
const from_s = s => (''+s).split(' ').map(s=> s.split(',').map(v=> isNaN(+v) ? 0 : +v))
const to_s = m => m.map(v=> v.join(',')).join(' ')

const safe_index = (m,i) => m[m.length == 1 ? 0 : i]

const component_wise = f => (a,b) => {
	let [m,n] = a.length > b.length ? [a,b] : [b,a]
	return m.map((v,i)=>  safe_index(n,i) == undefined ? v : f(safe_index(a,i), safe_index(b,i)))
}
const component_wise2D = f => (a,b) => component_wise(component_wise(f))(a,b)
const add = component_wise((a,b)=>a+b)
const mul = component_wise((a,b)=>a*b)
const add2D = component_wise2D((a,b)=>a+b)
const sub2D = component_wise2D((a,b)=>a-b)
const mul2D = component_wise2D((a,b)=>a*b)
const div2D = component_wise2D((a,b)=>a/b)
const STRETCH_X = Symbol('stretch.x');
const STRETCH_Y = Symbol('stretch.y');
 const implementStretchForTarget = (target, originalTarget) => {
    if (STRETCH_X in target) {
      // Target already has stretch. Don't implement again.
      return;
    }

    target[STRETCH_X] = originalTarget ? originalTarget[STRETCH_X] : 100;
    target[STRETCH_Y] = originalTarget ? originalTarget[STRETCH_Y] : 100;

    const original = target._getRenderedDirectionAndScale;
    target._getRenderedDirectionAndScale = function () {
      const result = original.call(this);

      result.scale[0] *= this[STRETCH_X] / 100;
      result.scale[1] *= this[STRETCH_Y] / 100;

      return result;
    };
  };
  vm.runtime.targets.forEach((target) => implementStretchForTarget(target));
  vm.runtime.on('targetWasCreated', (target, originalTarget) => implementStretchForTarget(target, originalTarget));
  vm.runtime.on('PROJECT_LOADED', () => {
    vm.runtime.targets.forEach((target) => implementStretchForTarget(target));
  });
 const forceUpdateDirectionAndScale = (target) => {
    target.setDirection(target.direction);
  };
///----------------------------------------------

var key = '';
document.onkeypress = function (e) {
e = e || window.event;
  key = e.key;
};
const set = (i,m,v) => {
	if(m.length == 1) {
		if(m[0][i-1] != undefined)
			m[0][i-1] = v[0][0]
	}
	else {
		m[i-1] = v[0]
	}
	return m
}
const get = (i,m) => [ m.length == 1 ? ( [m[0][i-1]] ?? [] ) : ( m[i-1] ?? [] ) ]

const dot = (a,b) => {
	if(a.length == 1 && a[0].length == 3)
		a = a[0].map(v=>[v])
	return b.map(bv=> a.reduce((acc,av,i)=> add(acc,mul(av,[safe_index(bv,i)])), 0))
}

const det = (m,i1,i2) => m[0][i1%3]*m[1][i2%3]-m[0][i2%3]*m[1][i1%3]
const cross = component_wise((a,b)=> a.map((_,i)=>det([a,b], i+1, i+2)))

const length = m => m.map(v=> dot([v],[v]).map(v=> Math.sqrt(v)))
const normalize = m => div2D(m,length(m))

const rotate = (a,v) => {
	a = a[0][0] * Math.PI / 180
	v = normalize(v)[0]

	const s = Math.sin(a)
	const c = Math.cos(a)

	const f1 = i => c + v[i] * v[i] * (1-c)
	const f2 = (i, n) => v[(i+1)%3] * v[(i+2)%3] * (1-c) + n * v[i] * s

	return [
		[f1(0), f2(2,1), f2(1,-1)],
		[f2(2,-1), f1(1), f2(0,1)],
		[f2(1,1), f2(0,-1), f1(2)]
	]
}

// =================== Scratch extension =================== 

// auto arguments is a little over complicated to deduce argument count

const letter = i => String.fromCharCode(97+i)

const auto_block = (blockType, opcode, text, args, t3) => ({ //text, ARGS, 
	blockType,
	opcode,
	text,
	arguments: Object.fromEntries(
		new Array(text.split('[').length-1).fill().map((_,i)=> [
			letter(i), {
				type: (args && args[i]) || 'string', //number 
				defaultValue: " "
			}
		])
	)
})
const mat_reporter_f = f => o => to_s(f(...new Array(Object.entries(o).length).fill().map((_,i)=> from_s(o[letter(i)]))))

class CustomExtension {

	constructor(runtime) {
		this.runtime = runtime
	}

	getInfo() {
	    return {
	    	id: "custom",
	    	name: "Custom Extension",
	    	blocks: [
	        auto_block('reporter', "Prompt", "Prompt [a]", 'string'),
                auto_block('command', "Alert", "Alert [a]", 'string'),
                auto_block('reporter', "Sqrt", "Square root [a]", 'number'),
                auto_block('command', 'js', "Javascript [a]", 'string'),
                auto_block('command', "href", "Redirect to [a]", 'string'),
                auto_block('reporter', 'getlist', 'Get List [a]', 'string'),
                auto_block('reporter', 'setlist', 'Set List [a] to [b]', 'string'), 
                auto_block('reporter', 'exact', 'Is [a] exactly [b]?', 'string'),
                auto_block('reporter', 'exponent', '[a] ^ [b]', 'number'),
                auto_block('reporter', 'date', 'Current Date', 'string'),
                auto_block('reporter', 'pi', 'π', 'number'),
                auto_block('reporter', 'currentMillisecond', 'current millisecond', 'number'),
                auto_block('reporter', 'letters', 'test [a] n [b] n [c]', 'string'),
                auto_block('command', 'newtimer', 'New timer [a]', 'string'),
                auto_block('command', 'logtimer', 'Log timer [a]', 'string'),
                auto_block('command', 'removetimer', 'Remove timer [a]', 'string'),
                auto_block('reporter', 'js', 'Javascript with output [a]', 'string'),
                auto_block('reporter', 'loadscript', 'Load script with link [a]', 'string'),
                auto_block('reporter', 'lastKey', 'Last key pressed', 'string'),
	        '---',
	      	
	    	],
	    	menus: {
	            varMenu: 'getVarMenu'
	        }
	    }
	}

	getVarMenu(target_id) {
		const vars = this.runtime.getTargetById(target_id).getAllVariableNamesInScopeByType('list')
		return vars.length == 0 ? [" "] : vars
	}
        newtimer({a}) {
                return console.time(a)
        }
        trace({a}) {
               return console.trace(a)
        }
        lastKey() {
                return key;
        }
        loadscript({a}) {
               var el=document.createElement('script');el.type='text/javascript';el.src=a;el.onerror=function(){return 'error';};document.getElementsByTagName('body')[0].appendChild(el); return true


        }
        
        logtimer({a}) {
                return console.timeLog(a)
        }
        removetimer({a}) {
                return console.timeEnd(a)
        }
        

	Prompt({a}) {
		return prompt(a)
	}
        Alert({a}) {
                return alert(a)
        }
  letters({a, b, c}) {
      return a.slice(Math.max(1, b) - 1, Math.min(a.length, c));
    }
        Sqrt({a}) {
                return Math.sqrt(a)
       }
       js({a}) {
               return eval(a)
       }
       href({a}) { 
               return document.location.href = 'https://'+a 
       }
       Warn({a}) {
               return warn(a)
       }
       setList({a}) {
      
       }
       getlist({a}) {
                const list = vm.runtime.getTargetForStage().lookupVariableByNameAndType(a, 'list');
      if (list) {
        return JSON.stringify(list.value);
      } else {
        return "";
      }
       }
    exact({a, b}) {
            return a == b
    }
    exponent({a, b}) {
          return Math.pow(a, b);
    }
    pi() {
       return Math.PI;
    }
    currentMillisecond() {
          return Date.now() % 1000;
    }
    currentHour() {
       return new Date().getHours()
    }
    date() {
         return new Date()
    }
    setlist({ a, b }) {
      let parsed;
      try {
        parsed = JSON.parse(a);
      } catch (e) {
        return; // JSON was invalid
      }

      if (!Array.isArray(parsed)) {
        return; // it's not an array
      }

      for (const element of parsed) {
        const type = typeof element;
        if (type !== "string" && type !== "number" && type !== "boolean") {
          return; // One of the elements has a disallowed type
        }
      }

      const list = vm.runtime.getTargetForStage().lookupVariableByNameAndType(b, 'list');
      if (!list) {
        return; // List was not found
      }

      list.value = parsed;
    }
}

// ============== globalize vm and load extension ===============

function findReactComponent(element) {
    let fiber = element[Object.keys(element).find(key => key.startsWith("__reactInternalInstance$"))];
    if (fiber == null) return null;

    const go = fiber => {
        let parent = fiber.return;
        while (typeof parent.type == "string") {
            parent = parent.return;
        }
        return parent;
    };
    fiber = go(fiber);
    while(fiber.stateNode == null) {
        fiber = go(fiber);
    }
    return fiber.stateNode;
}

window.vm = findReactComponent(document.getElementsByClassName("stage-header_stage-size-row_14N65")[0]).props.vm;

(function() {
    var extensionInstance = new CustomExtension(window.vm.extensionManager.runtime)
    var serviceName = window.vm.extensionManager._registerInternalExtension(extensionInstance)
    window.vm.extensionManager._loadedExtensions.set(extensionInstance.getInfo().id, serviceName)
})()