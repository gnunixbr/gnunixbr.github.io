var mediaWikiLoadStart=(new Date()).getTime(),mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};mwPerformance.mark('mwLoadStart');function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||ua.match(/MeeGo/)||(ua.match(/Glass/)&&ua.match(/Android/)));}(function(){if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');return;}
function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/load.php"});mw.loader.register([["site","metz4dr/"],["noscript","2GJr9jtj",[],"noscript"],["filepage","qdV7+x8J"],["user.groups","xEirbXVW",[],"user"],["user","fZz4liBA",[],"user"],["user.cssprefs","64Nx0RWw",[],"private"],["user.defaults","W1E9BjTN"],["user.options","+JoudQIu",[6],"private"],["user.tokens","ELkRFLtl",[],"private"],["mediawiki.language.data","pJtq8AIz",[168]],["mediawiki.skinning.elements","goUuG3zL"],["mediawiki.skinning.content","7ujyAuct"],["mediawiki.skinning.interface","AiTnGyHe"],["mediawiki.skinning.content.parsoid","f6+NjGst"],["mediawiki.skinning.content.externallinks","Vig36PXr"],["jquery.accessKeyLabel","HozGeag1",[25,129]],["jquery.appear","OsmhAdBS"],["jquery.arrowSteps","/sxIisOU"],["jquery.async","IFkNDArW"],["jquery.autoEllipsis","LLnW+/Zz",[37]],["jquery.badge","SwrarlKI",[165]],["jquery.byteLength","k/MwaV3h"],["jquery.byteLimit","TtyFfxbS",[21]],["jquery.checkboxShiftClick","kyg4wJlU"],["jquery.chosen","ipDJLzou"],["jquery.client","bRV2/rww"],["jquery.color","qsfKbNfc",[27]],["jquery.colorUtil","paJ+PRUp"],["jquery.confirmable","/543A5S2",[169]],["jquery.cookie","tO8zbdGH"],["jquery.expandableField","v3k2g6if"],["jquery.farbtastic","UrgdnCp7",[27]],["jquery.footHovzer","0fLVGXmo"],["jquery.form","E2XU90wN"],["jquery.fullscreen","3pNlAn9G"],["jquery.getAttrs","5PM4OKjA"],["jquery.hidpi","IqfMY47U"],["jquery.highlightText","8ZV4T5YN",[227,129]],["jquery.hoverIntent","4SjnhaFr"],["jquery.i18n","ev8zw+c3",[167]],["jquery.localize","sggWzgiB"],["jquery.makeCollapsible","vLy6JPgf"],["jquery.mockjax","9EyLGJGe"],["jquery.mw-jump","psUinZ9a"],["jquery.mwExtension","1ahlCWD7"],["jquery.placeholder","V9NG07jv"],["jquery.qunit","FN62Kn9n"],["jquery.qunit.completenessTest","6y3aAaEj",[46]],["jquery.spinner","bfMaqUet"],["jquery.jStorage","FuWlzNUE",[93]],["jquery.suggestions","geSjFwIB",[37]],["jquery.tabIndex","vKd4mLOk"],["jquery.tablesorter","x863Z8eZ",[227,129,170]],["jquery.textSelection","ORjKbUO6",[25]],["jquery.throttle-debounce","ZCUlxvWG"],["jquery.validate","eNfVPpLI"],["jquery.xmldom","YHfMOzaU"],["jquery.tipsy","t7vYncMz"],["jquery.ui.core","N946/7BZ",[59],"jquery.ui"],["jquery.ui.core.styles","t2jpfgs0",[],"jquery.ui"],["jquery.ui.accordion","hasxdCap",[58,78],"jquery.ui"],["jquery.ui.autocomplete","oks8l1Dr",[67],"jquery.ui"],["jquery.ui.button","BJQG/iZ+",[58,78],"jquery.ui"],["jquery.ui.datepicker","FfpHzF8m",[58],"jquery.ui"],["jquery.ui.dialog","FOHfqdvA",[62,65,69,71],"jquery.ui"],["jquery.ui.draggable","lsS2li8C",[58,68],"jquery.ui"],["jquery.ui.droppable","0d+Zo5Lt",[65],"jquery.ui"],["jquery.ui.menu","tY7zwkb9",[58,69,78],"jquery.ui"],["jquery.ui.mouse","AnQ1lauu",[78],"jquery.ui"],["jquery.ui.position","VuQ0ZyCg",[],"jquery.ui"],["jquery.ui.progressbar","kwxuumHw",[58,78],"jquery.ui"],["jquery.ui.resizable","nxJk5LIx",[58,68],"jquery.ui"],["jquery.ui.selectable","LKpIHr9M",[58,68],"jquery.ui"],["jquery.ui.slider","0x3LXbLY",[58,68],"jquery.ui"],["jquery.ui.sortable","gaer7Drr",[58,68],"jquery.ui"],["jquery.ui.spinner","qR0OnMqz",[62],"jquery.ui"],["jquery.ui.tabs","kUFX3FkG",[58,78],"jquery.ui"],["jquery.ui.tooltip","2UDD+Qak",[58,69,78],"jquery.ui"],["jquery.ui.widget","Ess9tHzz",[],"jquery.ui"],["jquery.effects.core","oMUxscSE",[],"jquery.ui"],["jquery.effects.blind","/03usig5",[79],"jquery.ui"],["jquery.effects.bounce","LDfNsAmD",[79],"jquery.ui"],["jquery.effects.clip","qEyCsRFX",[79],"jquery.ui"],["jquery.effects.drop","vMskWE/5",[79],"jquery.ui"],["jquery.effects.explode","6eeTPw8+",[79],"jquery.ui"],["jquery.effects.fade","tLbNuIOd",[79],"jquery.ui"],["jquery.effects.fold","LLQVRWvO",[79],"jquery.ui"],["jquery.effects.highlight","Qg6mtqvk",[79],"jquery.ui"],["jquery.effects.pulsate","ZlMtRu9h",[79],"jquery.ui"],["jquery.effects.scale","zFzeDR4O",[79],"jquery.ui"],["jquery.effects.shake","d0nY2jLa",[79],"jquery.ui"],["jquery.effects.slide","QjLB344v",[79],"jquery.ui"],["jquery.effects.transfer","PY0i39L0",[79],"jquery.ui"],["json","nOQf0TAg",[],null,null,"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment","AhuifpXk"],["mediawiki.apihelp","hS71HajR",[119]],["mediawiki.template","HOphizH+"],["mediawiki.template.mustache","DzcUqO3w",[96]],["mediawiki.template.regexp","h4XXz+pC",[96]],["mediawiki.apipretty","6FZokae9"],["mediawiki.api","N/d4Dn1/",[145,8]],["mediawiki.api.category","cWNh3qpt",[134,100]],["mediawiki.api.edit","RJ3c6jji",[134,100]],["mediawiki.api.login","xynIhy5G",[100]],["mediawiki.api.options","Li5RLDJG",[100]],["mediawiki.api.parse","AiDVy0Iu",[100]],["mediawiki.api.upload","o3ZK8tk4",[227,93,102]],["mediawiki.api.watch","mWN2avfA",[100]],["mediawiki.content.json","Hj0gGbbe"],["mediawiki.confirmCloseWindow","JK8Y1Oxt"],["mediawiki.debug","xDCHEEpo",[32,57]],["mediawiki.debug.init","dO2qDn7H",[110]],["mediawiki.feedback","+VN8+8XO",[134,125,229]],["mediawiki.feedlink","2Adexan4"],["mediawiki.filewarning","fzWK/Wly",[229]],["mediawiki.ForeignApi","3y6UvRX7",[116]],["mediawiki.ForeignApi.core","4iZuD5sP",[100,228]],["mediawiki.helplink","nkv5Wd/8"],["mediawiki.hidpi","OcVmAfMg",[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","ZzbD19p9",[25]],["mediawiki.htmlform","9OZvj52t",[22,129]],["mediawiki.htmlform.styles","2MLSBS/V"],["mediawiki.htmlform.ooui.styles","7Su+yAiN"],["mediawiki.icon","AF6ZA/4s"],["mediawiki.inspect","OUIZ8S9O",[21,93,129]],["mediawiki.messagePoster","fjHeA6LN",[100,228]],["mediawiki.messagePoster.wikitext","SEQQkodp",[102,125]],["mediawiki.notification","TGifGOmI",[177]],["mediawiki.notify","jCyXg1hN"],["mediawiki.RegExp","S4vkPLqI"],["mediawiki.pager.tablePager","Q3y/EvQn"],["mediawiki.searchSuggest","nh6KDRUz",[35,45,50,100]],["mediawiki.sectionAnchor","ievEtawD"],["mediawiki.storage","tIqCaL41"],["mediawiki.Title","ke8JlU+p",[21,145]],["mediawiki.Upload","j1bsWQLN",[106]],["mediawiki.ForeignUpload","XnQQPOYy",[115,135]],["mediawiki.ForeignStructuredUpload","cUblKsvY",[136]],["mediawiki.Upload.Dialog","PLq1lN0Y",[139]],["mediawiki.Upload.BookletLayout","7ibkpsuJ",[135,169,229]],["mediawiki.ForeignStructuredUpload.BookletLayout","nc5H2iPy",[137,139,224,223]],["mediawiki.toc","LmGQGSs6",[146]],["mediawiki.Uri","JGT/FyJX",[145,98]],["mediawiki.user","AnVLSZQs",[100,146,7]],["mediawiki.userSuggest","RKLUg4Dx",[50,100]],["mediawiki.util","yXtwv5OJ",[15,128]],["mediawiki.cookie","CVDTjGME",[29]],["mediawiki.toolbar","5RsVMdEi"],["mediawiki.experiments","1U7AfBI7"],["mediawiki.action.edit","5PnVlCVz",[22,53,150]],["mediawiki.action.edit.styles","pi2vh+AP"],["mediawiki.action.edit.collapsibleFooter","h21Y7l77",[41,146,123]],["mediawiki.action.edit.preview","Mjv0HTyo",[33,48,53,155,100,169]],["mediawiki.action.edit.stash","176WtpDp",[35,100]],["mediawiki.action.history","vMUFcZO0"],["mediawiki.action.history.diff","JwmuXq7I"],["mediawiki.action.view.dblClickEdit","3V849KIC",[177,7]],["mediawiki.action.view.metadata","KhUUvpDF"],["mediawiki.action.view.categoryPage.styles","8u9TIW0i"],["mediawiki.action.view.postEdit","q9OlMGYU",[146,169,96]],["mediawiki.action.view.redirect","IIXTfyrS",[25]],["mediawiki.action.view.redirectPage","V7cdWPHf"],["mediawiki.action.view.rightClickEdit","rt4cfYxb"],["mediawiki.action.edit.editWarning","4mpW44Fn",[53,109,169]],["mediawiki.action.view.filepage","IZbzS2UX"],["mediawiki.language","zMb2qZlr",[166,9]],["mediawiki.cldr","NJCQoOUn",[167]],["mediawiki.libs.pluralruleparser","d7vjXiLd"],["mediawiki.language.init","Hr88u+mn"],["mediawiki.jqueryMsg","EjtXgyaf",[227,165,145,7]],["mediawiki.language.months","c8VHrRRm",[165]],["mediawiki.language.names","Ur/sL4fv",[168]],["mediawiki.language.specialCharacters","lfy9K43n",[165]],["mediawiki.libs.jpegmeta","ixr5x7v2"],["mediawiki.page.gallery","7p6OX+8h",[54,175]],["mediawiki.page.gallery.styles","iqqTFCjh"],["mediawiki.page.ready","1ljfDbPh",[15,23,41,43,45]],["mediawiki.page.startup","7Bs3d1Ve",[145]],["mediawiki.page.patrol.ajax","RGlbRQWY",[48,134,100,177]],["mediawiki.page.watch.ajax","3hgT2HUb",[107,177]],["mediawiki.page.image.pagination","OOb5Ensb",[48,142]],["mediawiki.special","WPY6fek4"],["mediawiki.special.block","xVmGqDr6",[145]],["mediawiki.special.changeemail","vTyeQwrw",[145]],["mediawiki.special.changeslist","TwPyT2L5"],["mediawiki.special.changeslist.legend","P0U4XCzo"],["mediawiki.special.changeslist.legend.js","/jULWHW6",[41,146]],["mediawiki.special.changeslist.enhanced","vSthkanz"],["mediawiki.special.edittags","0FRZB2oG",[24]],["mediawiki.special.edittags.styles","+LRd5eiL"],["mediawiki.special.import","0hE3CAhR"],["mediawiki.special.movePage","rd2g37l8",[221]],["mediawiki.special.movePage.styles","qazC5Ibj"],["mediawiki.special.pageLanguage","dk7ErbV6"],["mediawiki.special.pagesWithProp","T87QOEfz"],["mediawiki.special.preferences","alGB5CZQ",[109,165,127]],["mediawiki.special.recentchanges","9nNWKTL7",[181]],["mediawiki.special.search","KejhT8yA"],["mediawiki.special.undelete","xWeFvzif"],["mediawiki.special.upload","fj6Cy23/",[48,134,100,109,169,173,96]],["mediawiki.special.userlogin.common.styles","xAltzRsN"],["mediawiki.special.userlogin.signup.styles","/p90f27+"],["mediawiki.special.userlogin.login.styles","HZsqNz+2"],["mediawiki.special.userlogin.signup.js","6Y4ADzBu",[54,100,169]],["mediawiki.special.unwatchedPages","sJ1DYv0b",[134,107]],["mediawiki.special.javaScriptTest","ze8jrJ7j",[142]],["mediawiki.special.version","Uxce5h7T"],["mediawiki.legacy.config","CsYJFeWz"],["mediawiki.legacy.commonPrint","nY9ffDw9"],["mediawiki.legacy.protect","Df0+Ma/P",[22]],["mediawiki.legacy.shared","sh3Ta8d7"],["mediawiki.legacy.oldshared","r9xbc/pS"],["mediawiki.legacy.wikibits","btniGVKz",[145]],["mediawiki.ui","HkKHU5Eu"],["mediawiki.ui.checkbox","s/wx4jx0"],["mediawiki.ui.radio","vPWvwM4u"],["mediawiki.ui.anchor","6spg1Qky"],["mediawiki.ui.button","pLCIDJKw"],["mediawiki.ui.input","ih7AeAvD"],["mediawiki.ui.icon","e6UOCDEM"],["mediawiki.ui.text","QnxnW93/"],["mediawiki.widgets","MeM2kypK",[19,22,115,134,224,222]],["mediawiki.widgets.styles","CA6yPuBc"],["mediawiki.widgets.DateInputWidget","N3FV+aVY",[94,229]],["mediawiki.widgets.CategorySelector","F7Sw/Ila",[100,229]],["mediawiki.widgets.UserInputWidget","pRG0wSPC",[229]],["es5-shim","oR9b9Kmk",[],null,null,"return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["dom-level2-shim","m00JiF7Z",[],null,null,"return!!window.Node;"],["oojs","82A3bobI",[226,93]],["oojs-ui","vhot+CMO",[228,230,231,232,233]],["oojs-ui.styles","GkNpVD3M"],["oojs-ui.styles.icons","4S9zK0Ye"],["oojs-ui.styles.indicators","m6Tft8hU"],["oojs-ui.styles.textures","C6FtYoW1"],["oojs-ui.styles.icons-accessibility","rqYZOPnh"],["oojs-ui.styles.icons-alerts","7qiQXEKJ"],["oojs-ui.styles.icons-content","Up4O/72h"],["oojs-ui.styles.icons-editing-advanced","iM7ZAK1v"],["oojs-ui.styles.icons-editing-core","tyPOgvWi"],["oojs-ui.styles.icons-editing-list","fn7UuV45"],["oojs-ui.styles.icons-editing-styling","fFAUr7Sa"],["oojs-ui.styles.icons-interactions","E5c3CvAB"],["oojs-ui.styles.icons-layout","SMQvz3Da"],["oojs-ui.styles.icons-location","r0O6mUoJ"],["oojs-ui.styles.icons-media","CCaP0XYB"],["oojs-ui.styles.icons-moderation","g1QTzLeI"],["oojs-ui.styles.icons-movement","f17kW0hq"],["oojs-ui.styles.icons-user","tMrTtr10"],["oojs-ui.styles.icons-wikimedia","xKYS6hCz"],["skins.cologneblue","ydGO/qmQ"],["skins.modern","u0PxsMoM"],["skins.monobook.styles","Gj1mqEka"],["skins.vector.styles","xTlo9Lqu"],["skins.vector.styles.responsive","RbtB7ZwY"],["skins.vector.js","VPKqD1v0",[51,54]],["ext.nuke","2atPuO4i"],["jquery.wikiEditor","ExmRbFg3",[53,165],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","oiIKGCGQ",[51,64,261],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","MbNmzAso",[50,257,134,100,169,96],"ext.wikiEditor"],["jquery.wikiEditor.preview","hHz+OGJ0",[256,100],"ext.wikiEditor"],["jquery.wikiEditor.publish","VTejn+yc",[257],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","jxzoNLQc",[18,29,256,263],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","xvOzHIh/",[261,172],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","dVrstpEd",[],"ext.wikiEditor"],["ext.wikiEditor","N/n+HMS8",[256,143],"ext.wikiEditor"],["ext.wikiEditor.dialogs","A1jaA3yB",[268,258],"ext.wikiEditor"],["ext.wikiEditor.preview","xSsajuu2",[264,259],"ext.wikiEditor"],["ext.wikiEditor.publish","H7uTP1r1",[264,260],"ext.wikiEditor"],["ext.wikiEditor.toolbar","ldgk3YYP",[264,262],"ext.wikiEditor"],["ext.wikiEditor.toolbar.styles","FfPEAvyw",[],"ext.wikiEditor"],["ext.checkUser","iBXnI0XV",[145]],["ext.babel","BwxtNypj"],["ext.cleanchanges","lNhNdWyy"],["ext.cleanchanges.uls","4hdWPIfl"],["ext.uls.languagenames","ABTEQ0t+"],["ext.uls.messages","udjq048+",[283]],["ext.uls.buttons","qWD+jlyi"],["ext.uls.displaysettings","BLLHgjgD",[286,293,289,105]],["ext.uls.geoclient","v+1atonZ"],["ext.uls.ime","RHgljpE4",[293,287,292]],["ext.uls.nojs","o4KXUQOF"],["ext.uls.init","VmySs7ta",[29,142]],["ext.uls.eventlogger","ptF8YLDN",[143,"schema.UniversalLanguageSelector"]],["ext.uls.i18n","9g2vD7m6",[39,145]],["ext.uls.inputsettings","D9HhSVYf",[279,286]],["ext.uls.interface","Jrrq1CWt",[289,57,169]],["ext.uls.languagesettings","IGvKcSJ+",[276,275,287,297]],["ext.uls.preferences","ce/25ZiZ",[143]],["ext.uls.compactlinks","fUdJG5ja",[293,295,165,217]],["ext.uls.webfonts","GjSniP90",[281,287]],["ext.uls.webfonts.fonts","vP1jfpA5",[291,296,298]],["ext.uls.webfonts.repository","8C91wGV/"],["jquery.ime","1yyUuXHq"],["ext.uls.mediawiki","ZiQJBuTX",[281,274,275,294]],["jquery.uls","KFNSw2Lz",[39,296,297]],["jquery.uls.compact","aDNuZ16M",[294]],["jquery.uls.data","hhLVDxxD"],["jquery.uls.grid","jZUn4GoC"],["jquery.webfonts","NGlJYhmE"],["ext.uls.pt","+6ongvew"],["ext.uls.interlanguage","eXJIxRhX"],["rangy.core","0lsHk+/q"],["ext.GoogleLogin.style","vXNMYPrk"],["ext.GoogleLogin.right.style","aJkbw1fT"],["ext.GoogleLogin.specialManage.scripts","+R5wzNNw",[100,229]],["ext.translate","KY3wW9aK"],["ext.translate.base","HiPKNMjt",[311,100]],["ext.translate.dropdownmenu","xtHYq464"],["ext.translate.editor","U03DQfru",[306,307,338,276,343,41,53,344,57,142,105,169,143]],["ext.translate.groupselector","NGgRd9/m",[306,313,337,69,169]],["ext.translate.helplink","vR0ZS1J2"],["ext.translate.hooks","rDv60Uk3"],["ext.translate.legacy","LJcUjEtv"],["ext.translate.loader","jbcClXgn"],["ext.translate.messagetable","D+ROiiHx",[306,313,319,276,16,344,142,169]],["ext.translate.messagewebimporter","D1pX4ld/"],["ext.translate.multiselectautocomplete","RCXUdiM9",[61]],["ext.translate.navitoggle","8nMkmKpf"],["ext.translate.pagetranslation.uls","ck+ztIND",[293]],["ext.translate.parsers","gQZvVHy0",[145]],["ext.translate.quickedit","Z3yXxlg8",[343,33,64,145]],["ext.translate.selecttoinput","IL7qNtN2"],["ext.translate.special.aggregategroups","yQKGHuwl",[61,100]],["ext.translate.special.importtranslations","rL4snNZ9",[61]],["ext.translate.special.languagestats","pmre7NTe",[52]],["ext.translate.special.managegroups","twYCDEFk"],["ext.translate.special.managetranslatorsandbox","rjoVqjE4",[313,340,276,293,64,169]],["ext.translate.special.pagemigration","2GM5ASRJ",[342,100,217]],["ext.translate.special.pagepreparation","SuiN6HMb",[44,134,155,100,169,213]],["ext.translate.special.pagetranslation","xHYONrss",[316,217]],["ext.translate.special.searchtranslations","WMBxlwc/",[308,309,278,293]],["ext.translate.special.searchtranslations.styles","dtTe4JcP"],["ext.translate.special.supportedlanguages","OvRD9nFA"],["ext.translate.special.translate","1GUgr2MQ",[309,314,317,341,293,105]],["ext.translate.special.translate.styles","PGXunB8Q"],["ext.translate.special.translationstash","T3XFKCS9",[308,314,340,293]],["ext.translate.special.translationstats","yIoKZqde",[63]],["ext.translate.statsbar","s/qjdEVP"],["ext.translate.storage","hVboRWnS"],["ext.translate.tabgroup","6b+aeTF/"],["ext.translate.translationstashstorage","p9ZqD6Nj",[100]],["ext.translate.workflowselector","wfsqfPib",[307,100]],["jquery.ajaxdispatcher","oINJ3hDs"],["jquery.autosize","rymdPs+g"],["jquery.textchange","7HPMNJ8I"]]);;mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"vector","stylepath":"/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/w/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://wiki.cyanogenmod.org","wgServerName":"wiki.cyanogenmod.org","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.26.2","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"CyanogenMod","5":"CyanogenMod talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","1198":"Translations","1199":"Translations talk","2300":"Gadget","2301":"Gadget talk","2302":"Gadget definition","2303":"Gadget definition talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"cyanogenmod":4,"cyanogenmod_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"translations":1198,"translations_talk":1199,"gadget":2300,"gadget_talk":2301,"gadget_definition":2302,"gadget_definition_talk":2303,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"CyanogenMod","wgDBname":"mediawiki","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"mediawiki_cmw_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[2302,2303],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!1,"wgResourceLoaderLegacyModules":["mediawiki.legacy.wikibits"],"wgForeignUploadTargets":[],"wgEnableUploads":!0,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"},"wgULSIMEEnabled":!0,"wgULSWebfontsEnabled":!0,"wgULSPosition":"personal","wgULSAnonCanChangeLanguage":!1,"wgULSEventLogging":!1,"wgULSImeSelectors":["input:not([type])","input[type=text]","input[type=search]","textarea","[contenteditable]"],"wgULSNoImeSelectors":["#wpCaptchaWord",".ve-ce-surface *"],"wgULSNoWebfontsSelectors":["#p-lang li.interlanguage-link > a"],"wgULSFontRepositoryBasePath":"/extensions/UniversalLanguageSelector/data/fontrepo/fonts/"});window.RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};}var script=document.createElement('script');script.src="/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=vector&version=x6qVeSGh";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());