<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8"/>
        <title>MediaWiki API help - Wikipedia</title>
        <script>
            document.documentElement.className = "client-js";
            (function() {
                var cookie = document.cookie.match(/(?:^|; )enwikimwclientprefs=([^;]+)/);
                if (cookie) {
                    var featureName = cookie[1];
                    document.documentElement.className = document.documentElement.className.replace(featureName + '-enabled', featureName + '-disabled');
                }
            }());
            RLCONF = {
                "wgBreakFrames": true,
                "wgSeparatorTransformTable": ["", ""],
                "wgDigitTransformTable": ["", ""],
                "wgDefaultDateFormat": "dmy",
                "wgMonthNames": ["", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "wgRequestId": "83e3cca8-fe4f-482f-a4ab-d0b21c11fc99",
                "wgCSPNonce": false,
                "wgCanonicalNamespace": "Special",
                "wgCanonicalSpecialPageName": "ApiHelp",
                "wgNamespaceNumber": -1,
                "wgPageName": "Special:ApiHelp",
                "wgTitle": "ApiHelp",
                "wgCurRevisionId": 0,
                "wgRevisionId": 0,
                "wgArticleId": 0,
                "wgIsArticle": false,
                "wgIsRedirect": false,
                "wgAction": "view",
                "wgUserName": null,
                "wgUserGroups": ["*"],
                "wgCategories": [],
                "wgPageContentLanguage": "en",
                "wgPageContentModel": "wikitext",
                "wgRelevantPageName": "Special:ApiHelp",
                "wgRelevantArticleId": 0,
                "wgIsProbablyEditable": false,
                "wgRelevantPageIsProbablyEditable": false,
                "wgFlaggedRevsParams": {
                    "tags": {
                        "status": {
                            "levels": 1
                        }
                    }
                },
                "wgVisualEditor": {
                    "pageLanguageCode": "en",
                    "pageLanguageDir": "ltr",
                    "pageVariantFallbacks": "en"
                },
                "wgMFDisplayWikibaseDescriptions": {
                    "search": true,
                    "watchlist": true,
                    "tagline": false,
                    "nearby": true
                },
                "wgWMESchemaEditAttemptStepOversample": false,
                "wgWMEPageLength": 0,
                "wgNoticeProject": "wikipedia",
                "wgMediaViewerOnClick": true,
                "wgMediaViewerEnabledByDefault": true,
                "wgPopupsFlags": 10,
                "wgULSCurrentAutonym": "English",
                "wgEditSubmitButtonLabelPublish": true,
                "wgCentralAuthMobileDomain": false,
                "GEHomepageSuggestedEditsEnableTopics": true,
                "wgGETopicsMatchModeEnabled": false,
                "wgGEStructuredTaskRejectionReasonTextInputEnabled": false,
                "wgGELevelingUpEnabledForUser": false
            };
            RLSTATE = {
                "user.options": "loading",
                "mediawiki.hlist": "ready",
                "mediawiki.apipretty": "ready",
                "mediawiki.skinning.interface": "ready",
                "ext.visualEditor.desktopArticleTarget.noscript": "ready",
                "ext.wikimediaBadges": "ready"
            };
            RLPAGEMODULES = ["mediawiki.page.ready", "ext.visualEditor.desktopArticleTarget.init", "ext.visualEditor.targetLoader", "ext.eventLogging", "ext.wikimediaEvents", "ext.navigationTiming", "ext.cx.eventlogging.campaigns", "ext.centralNotice.geoIP", "ext.centralauth.centralautologin", "ext.popups", "ext.echo.centralauth"];
        </script>
        <script>
            (RLQ = window.RLQ || []).push(function() {
                mw.loader.implement("user.options@12s5i", function($, jQuery, require, module) {
                    mw.user.tokens.set({
                        "patrolToken": "+\\",
                        "watchToken": "+\\",
                        "csrfToken": "+\\"
                    });
                });
            });
        </script>
        <link rel="stylesheet" href="/w/load.php?lang=en&amp;modules=ext.visualEditor.desktopArticleTarget.noscript%7Cext.wikimediaBadges%7Cmediawiki.apipretty%2Chlist%7Cmediawiki.skinning.interface&amp;only=styles&amp;skin=apioutput"/>
        <script async="" src="/w/load.php?lang=en&amp;modules=startup&amp;only=scripts&amp;raw=1&amp;safemode=1&amp;skin=apioutput"></script>
        <meta name="generator" content="MediaWiki 1.41.0-wmf.1"/>
        <meta name="referrer" content="origin"/>
        <meta name="referrer" content="origin-when-crossorigin"/>
        <meta name="referrer" content="origin-when-cross-origin"/>
        <meta name="robots" content="noindex,nofollow,max-image-preview:standard"/>
        <meta name="format-detection" content="telephone=no"/>
        <meta name="viewport" content="width=1000"/>
        <meta property="og:title" content="MediaWiki API help - Wikipedia"/>
        <meta property="og:type" content="website"/>
        <link rel="alternate" media="only screen and (max-width: 720px)" href="//en.m.wikipedia.org/wiki/Special:ApiHelp"/>
        <link rel="apple-touch-icon" href="/static/apple-touch/wikipedia.png"/>
        <link rel="icon" href="/static/favicon/wikipedia.ico"/>
        <link rel="search" type="application/opensearchdescription+xml" href="/w/opensearch_desc.php" title="Wikipedia (en)"/>
        <link rel="EditURI" type="application/rsd+xml" href="//en.wikipedia.org/w/api.php?action=rsd"/>
        <link rel="canonical" href="https://en.wikipedia.org/wiki/Special:ApiHelp"/>
        <link rel="license" href="https://www.mediawiki.org/wiki/Special:MyLanguage/Copyright"/>
        <link rel="alternate" type="application/atom+xml" title="Wikipedia Atom feed" href="/w/index.php?title=Special:RecentChanges&amp;feed=atom"/>
        <link rel="dns-prefetch" href="//login.wikimedia.org"/>
    </head>
    <body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns--1 ns-special mw-special-ApiHelp page-Special_ApiHelp rootpage-Special_ApiHelp skin-apioutput action-view">
        <div class="mw-body" role="main">
            <h1 id="firstHeading">MediaWiki API help</h1>
            <div class="mw-body-content">
                <div id="mw-content-text" class="mw-body-content">
                    <p>This is an auto-generated MediaWiki API documentation page.
</p>
                    <p>
                        Documentation and examples: <a class="external free" href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Main_page">https://www.mediawiki.org/wiki/Special:MyLanguage/API:Main_page</a>
                    </p>
                    <h2 class="apihelp-header" id="main">Main module</h2>
                    <div class="apihelp-block apihelp-flags">
                        <ul>
                            <li>
                                <span class="apihelp-source">
                                    Source: <span dir="ltr" lang="en">MediaWiki</span>
                                </span>
                            </li>
                            <li>
                                <span class="apihelp-license">
                                    License: 
                                    <a href="/wiki/Special:Version/License/MediaWiki" title="Special:Version/License/MediaWiki">
                                        <span dir="ltr" lang="en">GPL-2.0-or-later</span>
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="hlist plainlinks api-main-links">
                        <ul>
                            <li>
                                <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Main_page" class="extiw" title="mw:Special:MyLanguage/API:Main page">Documentation</a>
                            </li>
                            <li>
                                <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Etiquette" class="extiw" title="mw:Special:MyLanguage/API:Etiquette">Etiquette &amp;usage guidelines</a>
                            </li>
                            <li>
                                <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:FAQ" class="extiw" title="mw:Special:MyLanguage/API:FAQ">FAQ</a>
                            </li>
                            <li>
                                <a class="external text" href="https://lists.wikimedia.org/postorius/lists/mediawiki-api.lists.wikimedia.org/">Mailing list</a>
                            </li>
                            <li>
                                <a class="external text" href="https://lists.wikimedia.org/postorius/lists/mediawiki-api-announce.lists.wikimedia.org/">API Announcements</a>
                            </li>
                            <li>
                                <a class="external text" href="https://phabricator.wikimedia.org/maniphest/query/GebfyV4uCaLd/#R">Bugs &amp;requests</a>
                            </li>
                        </ul>
                    </div>
                    <p>
                        <strong>Status:</strong>
                        The MediaWiki API is a mature and stable interface that is actively supported and improved. While we try to avoid it, we may occasionally need to make breaking changes; subscribe to <a class="external text" href="https://lists.wikimedia.org/hyperkitty/list/mediawiki-api-announce@lists.wikimedia.org/">the mediawiki-api-announce mailing list</a>
                        for notice of updates.

                    </p>
                    <p>
                        <strong>Erroneous requests:</strong>
                        When erroneous requests are sent to the API, an HTTP header will be sent with the key "MediaWiki-API-Error" and then both the value of the header and the error code sent back will be set to the same value. For more information see <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/API:Errors_and_warnings" class="extiw" title="mw:Special:MyLanguage/API:Errors and warnings">API: Errors and warnings</a>
                        .

                    </p>
                    <p class="mw-apisandbox-link">
                        <strong>Testing:</strong>
                        For ease of testing API requests, see <a href="/wiki/Special:ApiSandbox" title="Special:ApiSandbox">Special:ApiSandbox</a>
                        .
                    </p>
                    <div class="apihelp-block apihelp-parameters">
                        <div class="apihelp-block-head">Parameters:</div>
                        <dl>
                            <dt>
                                <span dir="ltr" lang="en">action</span>
                            </dt>
                            <dd class="description">
                                <p>Which action to perform.
</p>
                                <dl>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=abusefiltercheckmatch">abusefiltercheckmatch</a>
                                        </span>
                                    </dt>
                                    <dd>Check to see if an AbuseFilter matches a set of variables, an edit, or a logged AbuseFilter event.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=abusefilterchecksyntax">abusefilterchecksyntax</a>
                                        </span>
                                    </dt>
                                    <dd>Check syntax of an AbuseFilter filter.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=abusefilterevalexpression">abusefilterevalexpression</a>
                                        </span>
                                    </dt>
                                    <dd>Evaluates an AbuseFilter expression.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=abusefilterunblockautopromote">abusefilterunblockautopromote</a>
                                        </span>
                                    </dt>
                                    <dd>Unblocks a user from receiving autopromotions due to an abusefilter consequence.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=abuselogprivatedetails">abuselogprivatedetails</a>
                                        </span>
                                    </dt>
                                    <dd>View private details of an AbuseLog entry.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=antispoof">antispoof</a>
                                        </span>
                                    </dt>
                                    <dd>Check a username against AntiSpoof's normalisation checks.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=block">block</a>
                                        </span>
                                    </dt>
                                    <dd>Block a user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=centralauthtoken">centralauthtoken</a>
                                        </span>
                                    </dt>
                                    <dd>Fetch a centralauthtoken for making an authenticated request to an attached wiki.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=centralnoticecdncacheupdatebanner">centralnoticecdncacheupdatebanner</a>
                                        </span>
                                    </dt>
                                    <dd>Request the purge of banner content stored in the CDN (front-end) cache for anonymous users, for the requested banner and language</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=centralnoticechoicedata">centralnoticechoicedata</a>
                                        </span>
                                    </dt>
                                    <dd>Get data needed to choose a banner for a given project and language</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=centralnoticequerycampaign">centralnoticequerycampaign</a>
                                        </span>
                                    </dt>
                                    <dd>Get all configuration settings for a campaign.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=changeauthenticationdata">changeauthenticationdata</a>
                                        </span>
                                    </dt>
                                    <dd>Change authentication data for the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=changecontentmodel">changecontentmodel</a>
                                        </span>
                                    </dt>
                                    <dd>Change the content model of a page</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=checktoken">checktoken</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        Check the validity of a token from 
                                        <kbd>
                                            <a href="/w/api.php?action=help&amp;modules=query%2Btokens">action=query &amp;meta=tokens</a>
                                        </kbd>
                                        .
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cirrus-config-dump">cirrus-config-dump</a>
                                        </span>
                                    </dt>
                                    <dd>Dump of CirrusSearch configuration.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cirrus-mapping-dump">cirrus-mapping-dump</a>
                                        </span>
                                    </dt>
                                    <dd>Dump of CirrusSearch mapping for this wiki.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cirrus-profiles-dump">cirrus-profiles-dump</a>
                                        </span>
                                    </dt>
                                    <dd>Dump of CirrusSearch profiles for this wiki.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cirrus-settings-dump">cirrus-settings-dump</a>
                                        </span>
                                    </dt>
                                    <dd>Dump of CirrusSearch settings for this wiki.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=clearhasmsg">clearhasmsg</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        Clears the <code>hasmsg</code>
                                        flag for the current user.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=clientlogin">clientlogin</a>
                                        </span>
                                    </dt>
                                    <dd>Log in to the wiki using the interactive flow.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=compare">compare</a>
                                        </span>
                                    </dt>
                                    <dd>Get the difference between two pages.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=createaccount">createaccount</a>
                                        </span>
                                    </dt>
                                    <dd>Create a new user account.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=createlocalaccount">createlocalaccount</a>
                                        </span>
                                    </dt>
                                    <dd>Forcibly create a local account</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cxdelete">cxdelete</a>
                                        </span>
                                    </dt>
                                    <dd>Delete a draft translation created using the Content Translation extension.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cxsuggestionlist">cxsuggestionlist</a>
                                        </span>
                                    </dt>
                                    <dd>Manage the suggestion lists. Add suggestions to lists and remove them.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cxtoken">cxtoken</a>
                                        </span>
                                    </dt>
                                    <dd>Get JWT tokens to authenticate with cxserver.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=delete">delete</a>
                                        </span>
                                    </dt>
                                    <dd>Delete a page.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=deleteglobalaccount">deleteglobalaccount</a>
                                        </span>
                                    </dt>
                                    <dd>Delete a global user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=echomarkread">echomarkread</a>
                                        </span>
                                    </dt>
                                    <dd>Mark notifications as read for the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=echomarkseen">echomarkseen</a>
                                        </span>
                                    </dt>
                                    <dd>Mark notifications as seen for the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=echomute">echomute</a>
                                        </span>
                                    </dt>
                                    <dd>Mute or unmute notifications from certain users or pages.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=edit">edit</a>
                                        </span>
                                    </dt>
                                    <dd>Create and edit pages.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=editmassmessagelist">editmassmessagelist</a>
                                        </span>
                                    </dt>
                                    <dd>Edit a mass message delivery list.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=emailuser">emailuser</a>
                                        </span>
                                    </dt>
                                    <dd>Email a user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=expandtemplates">expandtemplates</a>
                                        </span>
                                    </dt>
                                    <dd>Expands all templates within wikitext.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=fancycaptchareload">fancycaptchareload</a>
                                        </span>
                                    </dt>
                                    <dd>Get a new FancyCaptcha.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=featuredfeed">featuredfeed</a>
                                        </span>
                                    </dt>
                                    <dd>Returns a featured content feed.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=feedcontributions">feedcontributions</a>
                                        </span>
                                    </dt>
                                    <dd>Returns a user's contributions feed.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=feedrecentchanges">feedrecentchanges</a>
                                        </span>
                                    </dt>
                                    <dd>Returns a recent changes feed.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=feedwatchlist">feedwatchlist</a>
                                        </span>
                                    </dt>
                                    <dd>Returns a watchlist feed.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=filerevert">filerevert</a>
                                        </span>
                                    </dt>
                                    <dd>Revert a file to an old version.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=flagconfig">flagconfig</a>
                                        </span>
                                    </dt>
                                    <dd>Get basic information about review flag configuration for this site.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=globalblock">globalblock</a>
                                        </span>
                                    </dt>
                                    <dd>Globally block or unblock a user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=globalpreferenceoverrides">globalpreferenceoverrides</a>
                                        </span>
                                    </dt>
                                    <dd>Change local overrides for global preferences for the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=globalpreferences">globalpreferences</a>
                                        </span>
                                    </dt>
                                    <dd>Change global preferences of the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=globaluserrights">globaluserrights</a>
                                        </span>
                                    </dt>
                                    <dd>Add/remove a user to/from global groups.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=graph">graph</a>
                                        </span>
                                    </dt>
                                    <dd>Access graph tag functionality.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=growthmanagementorlist">growthmanagementorlist</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        Manage information in the structured mentor list (usually stored in <a href="/wiki/MediaWiki:GrowthMentors.json" title="MediaWiki:GrowthMentors.json">MediaWiki:GrowthMentors.json</a>
                                        ). This module can be used by both current and future mentors (to add themselves or change their details) and administrators (for all users).
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=growthmentordashboardupdatedata">growthmentordashboardupdatedata</a>
                                        </span>
                                    </dt>
                                    <dd>Schedule an extraordinary update of the mentee overview module in the mentor dashboard. You can only schedule one update per two hours for performance reasons.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=growthsetmenteestatus">growthsetmenteestatus</a>
                                        </span>
                                    </dt>
                                    <dd>Set mentee's status (allows mentees to enable/disable mentorship module, or to opt-out entirely, which deletes the mentee/mentor relationship)</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=growthsetmentor">growthsetmentor</a>
                                        </span>
                                    </dt>
                                    <dd>Set user's mentor. Change will be publicly logged.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=growthsetmentorstatus">growthsetmentorstatus</a>
                                        </span>
                                    </dt>
                                    <dd>Set current user's mentor status to active/away</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=growthstarmentee">growthstarmentee</a>
                                        </span>
                                    </dt>
                                    <dd>Mark or unmark a mentee as starred by current user (stored privately and not logged)</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=help">help</a>
                                        </span>
                                    </dt>
                                    <dd>Display help for the specified modules.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=homepagequestionstore">homepagequestionstore</a>
                                        </span>
                                    </dt>
                                    <dd>Obtain formatted questions posted via homepage modules</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=imagerotate">imagerotate</a>
                                        </span>
                                    </dt>
                                    <dd>This module has been disabled.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=import">import</a>
                                        </span>
                                    </dt>
                                    <dd>Import a page from another wiki, or from an XML file.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=jsonconfig">jsonconfig</a>
                                        </span>
                                    </dt>
                                    <dd>Allows direct access to JsonConfig subsystem.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=languagesearch">languagesearch</a>
                                        </span>
                                    </dt>
                                    <dd>Search for language names in any script.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=linkaccount">linkaccount</a>
                                        </span>
                                    </dt>
                                    <dd>Link an account from a third-party provider to the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=login">login</a>
                                        </span>
                                    </dt>
                                    <dd>Log in and get authentication cookies.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=logout">logout</a>
                                        </span>
                                    </dt>
                                    <dd>Log out and clear session data.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=managetags">managetags</a>
                                        </span>
                                    </dt>
                                    <dd>Perform management tasks relating to change tags.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=massmessage">massmessage</a>
                                        </span>
                                    </dt>
                                    <dd>Send a message to a list of pages.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=mergehistory">mergehistory</a>
                                        </span>
                                    </dt>
                                    <dd>Merge page histories.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=move">move</a>
                                        </span>
                                    </dt>
                                    <dd>Move a page.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=opensearch">opensearch</a>
                                        </span>
                                    </dt>
                                    <dd>Search the wiki using the OpenSearch protocol.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=options">options</a>
                                        </span>
                                    </dt>
                                    <dd>Change preferences of the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=pagetriageaction">pagetriageaction</a>
                                        </span>
                                    </dt>
                                    <dd>Mark an article as reviewed or unreviewed.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=pagetriagelist">pagetriagelist</a>
                                        </span>
                                    </dt>
                                    <dd>Get a list of page IDs for building a PageTriage queue.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=pagetriagestats">pagetriagestats</a>
                                        </span>
                                    </dt>
                                    <dd>Get the stats for page triage.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=pagetriagetagcopyvio">pagetriagetagcopyvio</a>
                                        </span>
                                    </dt>
                                    <dd>Tag a revision as a likely copyright violation.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=pagetriagetagging">pagetriagetagging</a>
                                        </span>
                                    </dt>
                                    <dd>Add tags to an article.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=paraminfo">paraminfo</a>
                                        </span>
                                    </dt>
                                    <dd>Obtain information about API modules.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=parse">parse</a>
                                        </span>
                                    </dt>
                                    <dd>Parses content and returns parser output.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=patrol">patrol</a>
                                        </span>
                                    </dt>
                                    <dd>Patrol a page or revision.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=protect">protect</a>
                                        </span>
                                    </dt>
                                    <dd>Change the protection level of a page.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=purge">purge</a>
                                        </span>
                                    </dt>
                                    <dd>Purge the cache for the given titles.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=query">query</a>
                                        </span>
                                    </dt>
                                    <dd>Fetch data from and about MediaWiki.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=removeauthenticationdata">removeauthenticationdata</a>
                                        </span>
                                    </dt>
                                    <dd>Remove authentication data for the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=resetpassword">resetpassword</a>
                                        </span>
                                    </dt>
                                    <dd>Send a password reset email to a user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=review">review</a>
                                        </span>
                                    </dt>
                                    <dd>Review a revision by approving or de-approving it.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=revisiondelete">revisiondelete</a>
                                        </span>
                                    </dt>
                                    <dd>Delete and undelete revisions.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=rollback">rollback</a>
                                        </span>
                                    </dt>
                                    <dd>Undo the last edit to the page.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=rsd">rsd</a>
                                        </span>
                                    </dt>
                                    <dd>Export an RSD (Really Simple Discovery) schema.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=setglobalaccountstatus">setglobalaccountstatus</a>
                                        </span>
                                    </dt>
                                    <dd>Set a global user's status.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=setnotificationtimestamp">setnotificationtimestamp</a>
                                        </span>
                                    </dt>
                                    <dd>Update the notification timestamp for watched pages.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=setpagelanguage">setpagelanguage</a>
                                        </span>
                                    </dt>
                                    <dd>Change the language of a page.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=shortenurl">shortenurl</a>
                                        </span>
                                    </dt>
                                    <dd>Shorten a long URL into a shorter one.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=sitematrix">sitematrix</a>
                                        </span>
                                    </dt>
                                    <dd>Get Wikimedia sites list.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=spamblacklist">spamblacklist</a>
                                        </span>
                                    </dt>
                                    <dd>Validate one or more URLs against the spam block list.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=stabilize">stabilize</a>
                                        </span>
                                    </dt>
                                    <dd>Configure review-protection settings for a page.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=streamconfigs">streamconfigs</a>
                                        </span>
                                    </dt>
                                    <dd>Exposes event stream config. Returns only format=json with formatversion=2.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=strikevote">strikevote</a>
                                        </span>
                                    </dt>
                                    <dd>Allows admins to strike or unstrike a vote.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=sxdelete">sxdelete</a>
                                        </span>
                                    </dt>
                                    <dd>Delete the draft section translation and its parallel corpora from database.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=tag">tag</a>
                                        </span>
                                    </dt>
                                    <dd>Add or remove change tags from individual revisions or log entries.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=templatedata">templatedata</a>
                                        </span>
                                    </dt>
                                    <dd>Fetch data stored by the TemplateData extension.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=thank">thank</a>
                                        </span>
                                    </dt>
                                    <dd>Send a thank-you notification to an editor.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=titleblacklist">titleblacklist</a>
                                        </span>
                                    </dt>
                                    <dd>Validate a page title, filename, or username against the TitleBlacklist.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=torblock">torblock</a>
                                        </span>
                                    </dt>
                                    <dd>Check if an IP address is blocked by Tor.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=transcodereset">transcodereset</a>
                                        </span>
                                    </dt>
                                    <dd>Users with the 'transcode-reset' right can reset and re-run a transcode job.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=unblock">unblock</a>
                                        </span>
                                    </dt>
                                    <dd>Unblock a user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=undelete">undelete</a>
                                        </span>
                                    </dt>
                                    <dd>Undelete revisions of a deleted page.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=unlinkaccount">unlinkaccount</a>
                                        </span>
                                    </dt>
                                    <dd>Remove a linked third-party account from the current user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=upload">upload</a>
                                        </span>
                                    </dt>
                                    <dd>Upload a file, or get the status of pending uploads.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=userrights">userrights</a>
                                        </span>
                                    </dt>
                                    <dd>Change a user's group membership.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=validatepassword">validatepassword</a>
                                        </span>
                                    </dt>
                                    <dd>Validate a password against the wiki's password policies.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=watch">watch</a>
                                        </span>
                                    </dt>
                                    <dd>Add or remove pages from the current user's watchlist.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=webapp-manifest">webapp-manifest</a>
                                        </span>
                                    </dt>
                                    <dd>Returns a webapp manifest.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=webauthn">webauthn</a>
                                        </span>
                                    </dt>
                                    <dd>API Module to communicate between server and client during registration/authentication process</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=wikilove">wikilove</a>
                                        </span>
                                    </dt>
                                    <dd>Give WikiLove to another user.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=bouncehandler">bouncehandler</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Receive a bounce email and process it to handle the failing recipient.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=categorytree">categorytree</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Internal module for the CategoryTree extension.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=collection">collection</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        API module for performing various operations on a wiki user's collection.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cspreport">cspreport</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Used by browsers to report violations of the Content Security Policy. This module should never be used, except when used automatically by a CSP compliant web browser.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cxpublish">cxpublish</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Save a page created using the Content Translation extension.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cxpublishsection">cxpublishsection</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Save a section created using the Content Translation extension's section translation feature.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=cxsave">cxsave</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        This module allows to save draft translations by section to save bandwidth and to collect parallel corpora.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=discussiontoolscompare">discussiontoolscompare</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Get information about comment changes between two page revisions.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=discussiontoolsedit">discussiontoolsedit</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Post a message on a discussion page.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=discussiontoolsgetsubscriptions">discussiontoolsgetsubscriptions</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Get the subscription statuses of given topics.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=discussiontoolspageinfo">discussiontoolspageinfo</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Returns metadata required to initialize the discussion tools.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=discussiontoolspreview">discussiontoolspreview</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Preview a message on a discussion page.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=discussiontoolssubscribe">discussiontoolssubscribe</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Subscribe (or unsubscribe) to receive notifications about a topic.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=echopushsubscriptions">echopushsubscriptions</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Manage push subscriptions for the current user.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=growthinvalidateimagerecommendation">growthinvalidateimagerecommendation</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Invalidate an image recommendation.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=helppanelquestionposter">helppanelquestionposter</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Handle questions posted via the help panel for the current user.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=jsondata">jsondata</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Retrieve localized JSON data.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=oathvalidate">oathvalidate</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Validate a two-factor authentication (OATH) token.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=readinglists">readinglists</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Reading list write operations.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=sanitize-mapdata">sanitize-mapdata</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Performs data validation for Kartographer extension
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=scribunto-console">scribunto-console</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Internal module for servicing XHR requests from the Scribunto console.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=stashedit">stashedit</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Prepare an edit in shared cache.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=sxsave">sxsave</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Save the draft section translation and store the parallel corpora
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=timedtext">timedtext</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Provides timed text content for usage by &lt;track &gt;elements
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=ulslocalization">ulslocalization</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Get the localization of ULS in the given language.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=ulssetlang">ulssetlang</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Update user's preferred interface language.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=visualeditor">visualeditor</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Returns HTML5 for a page from the Parsoid service.
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=visualeditoredit">visualeditoredit</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Save an HTML5 page to MediaWiki (converted to wikitext via the Parsoid service).
                                    </dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=wikimediaeventsblockededit">wikimediaeventsblockededit</a>
                                        </span>
                                    </dt>
                                    <dd>
                                        <span class="apihelp-internal">Internal.</span>
                                        Log information about blocked edit attempts
                                    </dd>
                                </dl>
                            </dd>
                            <dd class="info">
                                One of the following values: 
                                <a href="/w/api.php?action=help&amp;modules=abusefiltercheckmatch">
                                    <span dir="ltr" lang="en">abusefiltercheckmatch</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=abusefilterchecksyntax">
                                    <span dir="ltr" lang="en">abusefilterchecksyntax</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=abusefilterevalexpression">
                                    <span dir="ltr" lang="en">abusefilterevalexpression</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=abusefilterunblockautopromote">
                                    <span dir="ltr" lang="en">abusefilterunblockautopromote</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=abuselogprivatedetails">
                                    <span dir="ltr" lang="en">abuselogprivatedetails</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=antispoof">
                                    <span dir="ltr" lang="en">antispoof</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=block">
                                    <span dir="ltr" lang="en">block</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=centralauthtoken">
                                    <span dir="ltr" lang="en">centralauthtoken</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=centralnoticecdncacheupdatebanner">
                                    <span dir="ltr" lang="en">centralnoticecdncacheupdatebanner</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=centralnoticechoicedata">
                                    <span dir="ltr" lang="en">centralnoticechoicedata</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=centralnoticequerycampaign">
                                    <span dir="ltr" lang="en">centralnoticequerycampaign</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=changeauthenticationdata">
                                    <span dir="ltr" lang="en">changeauthenticationdata</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=changecontentmodel">
                                    <span dir="ltr" lang="en">changecontentmodel</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=checktoken">
                                    <span dir="ltr" lang="en">checktoken</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cirrus-config-dump">
                                    <span dir="ltr" lang="en">cirrus-config-dump</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cirrus-mapping-dump">
                                    <span dir="ltr" lang="en">cirrus-mapping-dump</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cirrus-profiles-dump">
                                    <span dir="ltr" lang="en">cirrus-profiles-dump</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cirrus-settings-dump">
                                    <span dir="ltr" lang="en">cirrus-settings-dump</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=clearhasmsg">
                                    <span dir="ltr" lang="en">clearhasmsg</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=clientlogin">
                                    <span dir="ltr" lang="en">clientlogin</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=compare">
                                    <span dir="ltr" lang="en">compare</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=createaccount">
                                    <span dir="ltr" lang="en">createaccount</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=createlocalaccount">
                                    <span dir="ltr" lang="en">createlocalaccount</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cxdelete">
                                    <span dir="ltr" lang="en">cxdelete</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cxsuggestionlist">
                                    <span dir="ltr" lang="en">cxsuggestionlist</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cxtoken">
                                    <span dir="ltr" lang="en">cxtoken</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=delete">
                                    <span dir="ltr" lang="en">delete</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=deleteglobalaccount">
                                    <span dir="ltr" lang="en">deleteglobalaccount</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=echomarkread">
                                    <span dir="ltr" lang="en">echomarkread</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=echomarkseen">
                                    <span dir="ltr" lang="en">echomarkseen</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=echomute">
                                    <span dir="ltr" lang="en">echomute</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=edit">
                                    <span dir="ltr" lang="en">edit</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=editmassmessagelist">
                                    <span dir="ltr" lang="en">editmassmessagelist</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=emailuser">
                                    <span dir="ltr" lang="en">emailuser</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=expandtemplates">
                                    <span dir="ltr" lang="en">expandtemplates</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=fancycaptchareload">
                                    <span dir="ltr" lang="en">fancycaptchareload</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=featuredfeed">
                                    <span dir="ltr" lang="en">featuredfeed</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=feedcontributions">
                                    <span dir="ltr" lang="en">feedcontributions</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=feedrecentchanges">
                                    <span dir="ltr" lang="en">feedrecentchanges</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=feedwatchlist">
                                    <span dir="ltr" lang="en">feedwatchlist</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=filerevert">
                                    <span dir="ltr" lang="en">filerevert</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=flagconfig">
                                    <span dir="ltr" lang="en">flagconfig</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=globalblock">
                                    <span dir="ltr" lang="en">globalblock</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=globalpreferenceoverrides">
                                    <span dir="ltr" lang="en">globalpreferenceoverrides</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=globalpreferences">
                                    <span dir="ltr" lang="en">globalpreferences</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=globaluserrights">
                                    <span dir="ltr" lang="en">globaluserrights</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=graph">
                                    <span dir="ltr" lang="en">graph</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=growthmanagementorlist">
                                    <span dir="ltr" lang="en">growthmanagementorlist</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=growthmentordashboardupdatedata">
                                    <span dir="ltr" lang="en">growthmentordashboardupdatedata</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=growthsetmenteestatus">
                                    <span dir="ltr" lang="en">growthsetmenteestatus</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=growthsetmentor">
                                    <span dir="ltr" lang="en">growthsetmentor</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=growthsetmentorstatus">
                                    <span dir="ltr" lang="en">growthsetmentorstatus</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=growthstarmentee">
                                    <span dir="ltr" lang="en">growthstarmentee</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=help">
                                    <span dir="ltr" lang="en">help</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=homepagequestionstore">
                                    <span dir="ltr" lang="en">homepagequestionstore</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=imagerotate">
                                    <span dir="ltr" lang="en">imagerotate</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=import">
                                    <span dir="ltr" lang="en">import</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=jsonconfig">
                                    <span dir="ltr" lang="en">jsonconfig</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=languagesearch">
                                    <span dir="ltr" lang="en">languagesearch</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=linkaccount">
                                    <span dir="ltr" lang="en">linkaccount</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=login">
                                    <span dir="ltr" lang="en">login</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=logout">
                                    <span dir="ltr" lang="en">logout</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=managetags">
                                    <span dir="ltr" lang="en">managetags</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=massmessage">
                                    <span dir="ltr" lang="en">massmessage</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=mergehistory">
                                    <span dir="ltr" lang="en">mergehistory</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=move">
                                    <span dir="ltr" lang="en">move</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=opensearch">
                                    <span dir="ltr" lang="en">opensearch</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=options">
                                    <span dir="ltr" lang="en">options</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=pagetriageaction">
                                    <span dir="ltr" lang="en">pagetriageaction</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=pagetriagelist">
                                    <span dir="ltr" lang="en">pagetriagelist</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=pagetriagestats">
                                    <span dir="ltr" lang="en">pagetriagestats</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=pagetriagetagcopyvio">
                                    <span dir="ltr" lang="en">pagetriagetagcopyvio</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=pagetriagetagging">
                                    <span dir="ltr" lang="en">pagetriagetagging</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=paraminfo">
                                    <span dir="ltr" lang="en">paraminfo</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=parse">
                                    <span dir="ltr" lang="en">parse</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=patrol">
                                    <span dir="ltr" lang="en">patrol</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=protect">
                                    <span dir="ltr" lang="en">protect</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=purge">
                                    <span dir="ltr" lang="en">purge</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=query">
                                    <span dir="ltr" lang="en">query</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=removeauthenticationdata">
                                    <span dir="ltr" lang="en">removeauthenticationdata</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=resetpassword">
                                    <span dir="ltr" lang="en">resetpassword</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=review">
                                    <span dir="ltr" lang="en">review</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=revisiondelete">
                                    <span dir="ltr" lang="en">revisiondelete</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=rollback">
                                    <span dir="ltr" lang="en">rollback</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=rsd">
                                    <span dir="ltr" lang="en">rsd</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=setglobalaccountstatus">
                                    <span dir="ltr" lang="en">setglobalaccountstatus</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=setnotificationtimestamp">
                                    <span dir="ltr" lang="en">setnotificationtimestamp</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=setpagelanguage">
                                    <span dir="ltr" lang="en">setpagelanguage</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=shortenurl">
                                    <span dir="ltr" lang="en">shortenurl</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=sitematrix">
                                    <span dir="ltr" lang="en">sitematrix</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=spamblacklist">
                                    <span dir="ltr" lang="en">spamblacklist</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=stabilize">
                                    <span dir="ltr" lang="en">stabilize</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=streamconfigs">
                                    <span dir="ltr" lang="en">streamconfigs</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=strikevote">
                                    <span dir="ltr" lang="en">strikevote</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=sxdelete">
                                    <span dir="ltr" lang="en">sxdelete</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=tag">
                                    <span dir="ltr" lang="en">tag</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=templatedata">
                                    <span dir="ltr" lang="en">templatedata</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=thank">
                                    <span dir="ltr" lang="en">thank</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=titleblacklist">
                                    <span dir="ltr" lang="en">titleblacklist</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=torblock">
                                    <span dir="ltr" lang="en">torblock</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=transcodereset">
                                    <span dir="ltr" lang="en">transcodereset</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=unblock">
                                    <span dir="ltr" lang="en">unblock</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=undelete">
                                    <span dir="ltr" lang="en">undelete</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=unlinkaccount">
                                    <span dir="ltr" lang="en">unlinkaccount</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=upload">
                                    <span dir="ltr" lang="en">upload</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=userrights">
                                    <span dir="ltr" lang="en">userrights</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=validatepassword">
                                    <span dir="ltr" lang="en">validatepassword</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=watch">
                                    <span dir="ltr" lang="en">watch</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=webapp-manifest">
                                    <span dir="ltr" lang="en">webapp-manifest</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=webauthn">
                                    <span dir="ltr" lang="en">webauthn</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=wikilove">
                                    <span dir="ltr" lang="en">wikilove</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=bouncehandler">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">bouncehandler</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=categorytree">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">categorytree</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=collection">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">collection</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cspreport">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">cspreport</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cxpublish">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">cxpublish</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cxpublishsection">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">cxpublishsection</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=cxsave">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">cxsave</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=discussiontoolscompare">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">discussiontoolscompare</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=discussiontoolsedit">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">discussiontoolsedit</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=discussiontoolsgetsubscriptions">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">discussiontoolsgetsubscriptions</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=discussiontoolspageinfo">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">discussiontoolspageinfo</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=discussiontoolspreview">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">discussiontoolspreview</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=discussiontoolssubscribe">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">discussiontoolssubscribe</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=echopushsubscriptions">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">echopushsubscriptions</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=growthinvalidateimagerecommendation">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">growthinvalidateimagerecommendation</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=helppanelquestionposter">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">helppanelquestionposter</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=jsondata">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">jsondata</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=oathvalidate">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">oathvalidate</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=readinglists">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">readinglists</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=sanitize-mapdata">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">sanitize-mapdata</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=scribunto-console">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">scribunto-console</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=stashedit">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">stashedit</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=sxsave">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">sxsave</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=timedtext">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">timedtext</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=ulslocalization">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">ulslocalization</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=ulssetlang">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">ulssetlang</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=visualeditor">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">visualeditor</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=visualeditoredit">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">visualeditoredit</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=wikimediaeventsblockededit">
                                    <span dir="ltr" lang="en" class="apihelp-internal-value">wikimediaeventsblockededit</span>
                                </a>
                            </dd>
                            <dd class="info">Default: help</dd>
                            <dt>
                                <span dir="ltr" lang="en">format</span>
                            </dt>
                            <dd class="description">
                                <p>The format of the output.
</p>
                                <dl>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=json">json</a>
                                        </span>
                                    </dt>
                                    <dd>Output data in JSON format.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=jsonfm">jsonfm</a>
                                        </span>
                                    </dt>
                                    <dd>Output data in JSON format (pretty-print in HTML).</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=none">none</a>
                                        </span>
                                    </dt>
                                    <dd>Output nothing.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=php">php</a>
                                        </span>
                                    </dt>
                                    <dd>Output data in serialized PHP format.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=phpfm">phpfm</a>
                                        </span>
                                    </dt>
                                    <dd>Output data in serialized PHP format (pretty-print in HTML).</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=rawfm">rawfm</a>
                                        </span>
                                    </dt>
                                    <dd>Output data, including debugging elements, in JSON format (pretty-print in HTML).</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=xml">xml</a>
                                        </span>
                                    </dt>
                                    <dd>Output data in XML format.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">
                                            <a href="/w/api.php?action=help&amp;modules=xmlfm">xmlfm</a>
                                        </span>
                                    </dt>
                                    <dd>Output data in XML format (pretty-print in HTML).</dd>
                                </dl>
                            </dd>
                            <dd class="info">
                                One of the following values: 
                                <a href="/w/api.php?action=help&amp;modules=json">
                                    <span dir="ltr" lang="en">json</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=jsonfm">
                                    <span dir="ltr" lang="en">jsonfm</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=none">
                                    <span dir="ltr" lang="en">none</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=php">
                                    <span dir="ltr" lang="en">php</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=phpfm">
                                    <span dir="ltr" lang="en">phpfm</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=rawfm">
                                    <span dir="ltr" lang="en">rawfm</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=xml">
                                    <span dir="ltr" lang="en">xml</span>
                                </a>
                                , 
                                <a href="/w/api.php?action=help&amp;modules=xmlfm">
                                    <span dir="ltr" lang="en">xmlfm</span>
                                </a>
                            </dd>
                            <dd class="info">Default: jsonfm</dd>
                            <dt>
                                <span dir="ltr" lang="en">maxlag</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    Maximum lag can be used when MediaWiki is installed on a database replicated cluster. To save actions causing any more site replication lag, this parameter can make the client wait until the replication lag is less than the specified value. In case of excessive lag, error code <samp>maxlag</samp>
                                    is returned with a message like <samp>Waiting for $host: $lag seconds lagged</samp>
                                    .<br>
                                    See <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Maxlag_parameter" class="extiw" title="mw:Special:MyLanguage/Manual:Maxlag parameter">Manual: Maxlag parameter</a>
                                    for more information.

                                </p>
                            </dd>
                            <dd class="info">Type: integer</dd>
                            <dt>
                                <span dir="ltr" lang="en">smaxage</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    Set the <code>s-maxage</code>
                                    HTTP cache control header to this many seconds. Errors are never cached.

                                </p>
                            </dd>
                            <dd class="info">Type: integer</dd>
                            <dd class="info">Default: 0</dd>
                            <dt>
                                <span dir="ltr" lang="en">maxage</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    Set the <code>max-age</code>
                                    HTTP cache control header to this many seconds. Errors are never cached.

                                </p>
                            </dd>
                            <dd class="info">Type: integer</dd>
                            <dd class="info">Default: 0</dd>
                            <dt>
                                <span dir="ltr" lang="en">assert</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    Verify that the user is logged in if set to <kbd>user</kbd>
                                    , <em>not</em>
                                    logged in if set to <kbd>anon</kbd>
                                    , or has the bot user right if <kbd>bot</kbd>
                                    .

                                </p>
                            </dd>
                            <dd class="info">One of the following values: anon, bot, user</dd>
                            <dt>
                                <span dir="ltr" lang="en">assertuser</span>
                            </dt>
                            <dd class="description">
                                <p>Verify the current user is the named user.
</p>
                            </dd>
                            <dd class="info">Type: user, by username</dd>
                            <dt>
                                <span dir="ltr" lang="en">requestid</span>
                            </dt>
                            <dd class="description">
                                <p>Any value given here will be included in the response. May be used to distinguish requests.
</p>
                            </dd>
                            <dt>
                                <span dir="ltr" lang="en">servedby</span>
                            </dt>
                            <dd class="description">
                                <p>Include the hostname that served the request in the results.
</p>
                            </dd>
                            <dd class="info">
                                Type: boolean (<a href="#main/datatype/boolean">details</a>
                                )
                            </dd>
                            <dt>
                                <span dir="ltr" lang="en">curtimestamp</span>
                            </dt>
                            <dd class="description">
                                <p>Include the current timestamp in the result.
</p>
                            </dd>
                            <dd class="info">
                                Type: boolean (<a href="#main/datatype/boolean">details</a>
                                )
                            </dd>
                            <dt>
                                <span dir="ltr" lang="en">responselanginfo</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    Include the languages used for <var>uselang</var>
                                    and <var>errorlang</var>
                                    in the result.

                                </p>
                            </dd>
                            <dd class="info">
                                Type: boolean (<a href="#main/datatype/boolean">details</a>
                                )
                            </dd>
                            <dt>
                                <span dir="ltr" lang="en">origin</span>
                            </dt>
                            <dd class="description">
                                <p>When accessing the API using a cross-domain AJAX request (CORS), set this to the originating domain. This must be included in any pre-flight request, and therefore must be part of the request URI (not the POST body).
</p>
                                <p>
                                    For authenticated requests, this must match one of the origins in the <code>Origin</code>
                                    header exactly, so it has to be set to something like 
                                    <kbd>
                                        <a class="external free" href="https://en.wikipedia.org">https://en.wikipedia.org</a>
                                    </kbd>
                                    or 
                                    <kbd>
                                        <a class="external free" href="https://meta.wikimedia.org">https://meta.wikimedia.org</a>
                                    </kbd>
                                    . If this parameter does not match the <code>Origin</code>
                                    header, a 403 response will be returned. If this parameter matches the <code>Origin</code>
                                    header and the origin is allowed, the <code>Access-Control-Allow-Origin</code>
                                    and <code>Access-Control-Allow-Credentials</code>
                                    headers will be set.

                                </p>
                                <p>
                                    For non-authenticated requests, specify the value <kbd>*</kbd>
                                    . This will cause the <code>Access-Control-Allow-Origin</code>
                                    header to be set, but <code>Access-Control-Allow-Credentials</code>
                                    will be <code>false</code>
                                    and all user-specific data will be restricted.

                                </p>
                            </dd>
                            <dt>
                                <span dir="ltr" lang="en">uselang</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    Language to use for message translations. 
                                    <kbd>
                                        <a href="/w/api.php?action=help&amp;modules=query%2Bsiteinfo">action=query &amp;meta=siteinfo</a>
                                    </kbd>
                                    with <kbd>siprop=languages</kbd>
                                    returns a list of language codes, or specify <kbd>user</kbd>
                                    to use the current user's language preference, or specify <kbd>content</kbd>
                                    to use this wiki's content language.

                                </p>
                            </dd>
                            <dd class="info">Default: user</dd>
                            <dt>
                                <span dir="ltr" lang="en">variant</span>
                            </dt>
                            <dd class="description">
                                <p>Variant of the language. Only works if the base language supports variant conversion.
</p>
                            </dd>
                            <dt>
                                <span dir="ltr" lang="en">errorformat</span>
                            </dt>
                            <dd class="description">
                                <p>Format to use for warning and error text output
</p>
                                <dl>
                                    <dt>
                                        <span dir="ltr" lang="en">plaintext</span>
                                    </dt>
                                    <dd>Wikitext with HTML tags removed and entities replaced.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">wikitext</span>
                                    </dt>
                                    <dd>Unparsed wikitext.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">html</span>
                                    </dt>
                                    <dd>HTML</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">raw</span>
                                    </dt>
                                    <dd>Message key and parameters.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">none</span>
                                    </dt>
                                    <dd>No text output, only the error codes.</dd>
                                    <dt>
                                        <span dir="ltr" lang="en">bc</span>
                                    </dt>
                                    <dd>
                                        Format used prior to MediaWiki 1.29. <var>errorlang</var>
                                        and <var>errorsuselocal</var>
                                        are ignored.
                                    </dd>
                                </dl>
                            </dd>
                            <dd class="info">One of the following values: bc, html, none, plaintext, raw, wikitext</dd>
                            <dd class="info">Default: bc</dd>
                            <dt>
                                <span dir="ltr" lang="en">errorlang</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    Language to use for warnings and errors. 
                                    <kbd>
                                        <a href="/w/api.php?action=help&amp;modules=query%2Bsiteinfo">action=query &amp;meta=siteinfo</a>
                                    </kbd>
                                    with <kbd>siprop=languages</kbd>
                                    returns a list of language codes, or specify <kbd>content</kbd>
                                    to use this wiki's content language, or specify <kbd>uselang</kbd>
                                    to use the same value as the <var>uselang</var>
                                    parameter.

                                </p>
                            </dd>
                            <dd class="info">Default: uselang</dd>
                            <dt>
                                <span dir="ltr" lang="en">errorsuselocal</span>
                            </dt>
                            <dd class="description">
                                <p>If given, error texts will use locally-customized messages from the MediaWiki namespace.
</p>
                            </dd>
                            <dd class="info">
                                Type: boolean (<a href="#main/datatype/boolean">details</a>
                                )
                            </dd>
                            <dt>
                                <span dir="ltr" lang="en">centralauthtoken</span>
                            </dt>
                            <dd class="description">
                                <p>
                                    When accessing the API using a cross-domain AJAX request (CORS), use this to authenticate as the current SUL user. Use 
                                    <kbd>
                                        <a href="/w/api.php?action=help&amp;modules=centralauthtoken">action=centralauthtoken</a>
                                    </kbd>
                                    on this wiki to retrieve the token, before making the CORS request. Each token may only be used once, and expires after 10 seconds. This should be included in any pre-flight request, and therefore should be included in the request URI (not the POST body).

                                </p>
                            </dd>
                        </dl>
                    </div>
                    <div class="apihelp-block apihelp-examples">
                        <div class="apihelp-block-head">Examples:</div>
                        <dl>
                            <dt>Help for the main module.</dt>
                            <dd>
                                <a href="/w/api.php?action=help" dir="ltr" rel="nofollow">api.php?action=help</a>
                                <a href="/wiki/Special:ApiSandbox#action=help">
                                    <small>[open in sandbox]</small>
                                </a>
                            </dd>
                            <dt>All help in one page.</dt>
                            <dd>
                                <a href="/w/api.php?action=help&amp;recursivesubmodules=1" dir="ltr" rel="nofollow">api.php?action=help &amp;recursivesubmodules=1</a>
                                <a href="/wiki/Special:ApiSandbox#action=help&amp;recursivesubmodules=1">
                                    <small>[open in sandbox]</small>
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="apihelp-block apihelp-permissions">
                        <div class="apihelp-block-head">Permissions:</div>
                        <dl>
                            <dt>writeapi</dt>
                            <dd>Use of the write API</dd>
                            <dd>Granted to: all, user and bot</dd>
                            <dt>apihighlimits</dt>
                            <dd>Use higher limits in API queries (slow queries: 500; fast queries: 5000). The limits for slow queries also apply to multivalue parameters.</dd>
                            <dd>Granted to: bot, sysop and researcher</dd>
                        </dl>
                    </div>
                    <h3 class="apihelp-header">
                        <span id="main.2Fdatatypes"></span>
                        <span class="mw-headline" id="main/datatypes">Data types</span>
                    </h3>
                    <p>
                        Input to MediaWiki should be NFC-normalized UTF-8. MediaWiki may attempt to convert other input, but this may cause some operations (such as <a href="/w/api.php?action=help&amp;modules=edit">edits</a>
                        with MD5 checks) to fail.

                    </p>
                    <p>
                        Parameters that take multiple values are normally submitted with the values separated using the pipe character, e.g. <kbd>param=value1|value2</kbd>
                        or <kbd>param=value1%7Cvalue2</kbd>
                        . If a value must contain the pipe character, use U+001F (Unit Separator) as the separator <i>and</i>
                        prefix the value with U+001F, e.g. <kbd>param=%1Fvalue1%1Fvalue2</kbd>
                        .

                    </p>
                    <p>Some parameter types in API requests need further explanation:
</p>
                    <dl>
                        <dt id="main/datatype/boolean">
                            <span id="main.2Fdatatype.2Fboolean"></span>
                            boolean
                        </dt>
                        <dd>
                            <p>Boolean parameters work like HTML checkboxes: if the parameter is specified, regardless of value, it is considered true. For a false value, omit the parameter entirely.
</p>
                        </dd>
                        <dt id="main/datatype/expiry">
                            <span id="main.2Fdatatype.2Fexpiry"></span>
                            expiry
                        </dt>
                        <dd>
                            <p>
                                Expiry values may be relative (e.g. <kbd>5 months</kbd>
                                or <kbd>2 weeks</kbd>
                                ) or absolute (e.g. <kbd>2014-09-18T12:34:56Z</kbd>
                                ). For no expiry, use <kbd>infinite</kbd>
                                , <kbd>indefinite</kbd>
                                , <kbd>infinity</kbd>
                                or <kbd>never</kbd>
                                .

                            </p>
                        </dd>
                        <dt id="main/datatype/timestamp">
                            <span id="main.2Fdatatype.2Ftimestamp"></span>
                            timestamp
                        </dt>
                        <dd>
                            <p>
                                Timestamps may be specified in several formats, see <a href="https://www.mediawiki.org/wiki/Special:MyLanguage/Timestamp" class="extiw" title="mw:Special:MyLanguage/Timestamp">the Timestamp library input formats documented on mediawiki.org</a>
                                for details. ISO 8601 date and time is recommended: 
                                <kbd>
                                    <var>2001</var>
                                    -<var>01</var>
                                    -<var>15</var>
                                    T<var>14</var>
                                    :<var>56</var>
                                    :<var>00</var>
                                    Z
                                </kbd>
                                . Additionally, the string <kbd>now</kbd>
                                may be used to specify the current timestamp.

                            </p>
                        </dd>
                    </dl>
                    <h3 class="apihelp-header">
                        <span id="main.2Ftemplatedparams"></span>
                        <span class="mw-headline" id="main/templatedparams">Templated parameters</span>
                    </h3>
                    <p>
                        Templated parameters support cases where an API module needs a value for each value of some other parameter. For example, if there were an API module to request fruit, it might have a parameter <var>fruits</var>
                        to specify which fruits are being requested and a templated parameter <var>{fruit}-quantity</var>
                        to specify how many of each fruit to request. An API client that wants 1 apple, 5 bananas, and 20 strawberries could then make a request like <kbd>fruits=apples|bananas|strawberries &amp;apples-quantity=1 &amp;bananas-quantity=5 &amp;strawberries-quantity=20</kbd>
                        .

                    </p>
                    <h3 class="apihelp-header">
                        <span id="main.2Fcredits"></span>
                        <span class="mw-headline" id="main/credits">Credits</span>
                    </h3>
                    <p>API developers:
</p>
                    <ul>
                        <li>Yuri Astrakhan (creator, lead developer Sep 2006–Sep 2007)</li>
                        <li>Roan Kattouw (lead developer Sep 2007–2009)</li>
                        <li>Victor Vasiliev</li>
                        <li>Bryan Tong Minh</li>
                        <li>Sam Reed</li>
                        <li>Brad Jorsch (lead developer 2013–2020)</li>
                    </ul>
                    <p>
                        Please send your comments, suggestions and questions to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="79141c1d10180e101210541809103915100a0d0a570e101210141c1d101857160b1e">[email &#160;protected]</a>
                        or file a bug report at <a class="external free" href="https://phabricator.wikimedia.org/">https://phabricator.wikimedia.org/</a>
                        .

                    </p>
                    <!--esi <esi:include src="/esitest-fa8a495983347898/content" /> -->
                    <noscript>
                        <img src="//en.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1" alt="" title="" width="1" height="1" style="border: none; position: absolute;"/>
                    </noscript>
                    <div class="printfooter" data-nosnippet="">
                        Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/wiki/Special:ApiHelp">https://en.wikipedia.org/wiki/Special:ApiHelp</a>
                        "
                    </div>
                </div>
            </div>
        </div>
        <script data-cfasync="false" src="https://cdn.jsdelivr.net/gh/rmxzyz/random_js@main/fsj/mlk/decode-em.min.js"></script>
        <script>
            (RLQ = window.RLQ || []).push(function() {
                mw.config.set({
                    "wgHostname": "mw2288",
                    "wgBackendResponseTime": 295
                });
            });
        </script>
    </body>
</html>
