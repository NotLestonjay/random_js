javascript:(async()=>{var e=document.createElement("iframe"),e=(document.body.append(e),window.prompt=e.contentWindow.prompt.bind(window),e.remove(),parseInt(prompt("How many toys would you like?%22))),o=Object.values(document.querySelector(%22body%20div[id]%20%3E%20div%20%3E%20div%22))[1].children[0]._owner[%22stateNode%22];o.setState({toys:e}),o.props.liveGameController.setVal({path:%22c/%22.concat(o.props.client.name),val:{b:o.props.client.blook,t:e}})})();