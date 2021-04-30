var mod_pagespeed_DwvJlow$Js = ";(function(root,factory){if(typeof define==='function'&&define.amd){define(['jquery'],factory);}else{factory(root.jQuery);}}(this,function($){'use strict';var debug=false;var browser={data:{index:0,name:'scrollbar'},macosx:/mac/i.test(navigator.platform),mobile:/android|webos|iphone|ipad|ipod|blackberry/i.test(navigator.userAgent),overlay:null,scroll:null,scrolls:[],webkit:/webkit/i.test(navigator.userAgent)&&!/edge\\/\\d+/i.test(navigator.userAgent)};browser.scrolls.add=function(instance){this.remove(instance).push(instance);};browser.scrolls.remove=function(instance){while($.inArray(instance,this)>=0){this.splice($.inArray(instance,this),1);}return this;};var defaults={\"autoScrollSize\":true,\"autoUpdate\":true,\"debug\":false,\"disableBodyScroll\":false,\"duration\":200,\"ignoreMobile\":false,\"ignoreOverlay\":false,\"scrollStep\":30,\"showArrows\":false,\"stepScrolling\":true,\"scrollx\":null,\"scrolly\":null,\"onDestroy\":null,\"onInit\":null,\"onScroll\":null,\"onUpdate\":null};var BaseScrollbar=function(container){if(!browser.scroll){browser.overlay=isScrollOverlaysContent();browser.scroll=getBrowserScrollSize();updateScrollbars();$(window).resize(function(){var forceUpdate=false;if(browser.scroll&&(browser.scroll.height||browser.scroll.width)){var scroll=getBrowserScrollSize();if(scroll.height!==browser.scroll.height||scroll.width!==browser.scroll.width){browser.scroll=scroll;forceUpdate=true;}}updateScrollbars(forceUpdate);});}this.container=container;this.namespace='.scrollbar_'+browser.data.index++;this.options=$.extend({},defaults,window.jQueryScrollbarOptions||{});this.scrollTo=null;this.scrollx={};this.scrolly={};container.data(browser.data.name,this);browser.scrolls.add(this);};BaseScrollbar.prototype={destroy:function(){if(!this.wrapper){return;}this.container.removeData(browser.data.name);browser.scrolls.remove(this);var scrollLeft=this.container.scrollLeft();var scrollTop=this.container.scrollTop();this.container.insertBefore(this.wrapper).css({\"height\":\"\",\"margin\":\"\",\"max-height\":\"\"}).removeClass('scroll-content scroll-scrollx_visible scroll-scrolly_visible').off(this.namespace).scrollLeft(scrollLeft).scrollTop(scrollTop);this.scrollx.scroll.removeClass('scroll-scrollx_visible').find('div').andSelf().off(this.namespace);this.scrolly.scroll.removeClass('scroll-scrolly_visible').find('div').andSelf().off(this.namespace);this.wrapper.remove();$(document).add('body').off(this.namespace);if($.isFunction(this.options.onDestroy)){this.options.onDestroy.apply(this,[this.container]);}},init:function(options){var S=this,c=this.container,cw=this.containerWrapper||c,namespace=this.namespace,o=$.extend(this.options,options||{}),s={x:this.scrollx,y:this.scrolly},w=this.wrapper;var initScroll={\"scrollLeft\":c.scrollLeft(),\"scrollTop\":c.scrollTop()};if((browser.mobile&&o.ignoreMobile)||(browser.overlay&&o.ignoreOverlay)||(browser.macosx&&!browser.webkit)){return false;}if(!w){this.wrapper=w=$('<div>').addClass('scroll-wrapper').addClass(c.attr('class')).css('position',c.css('position')=='absolute'?'absolute':'relative').insertBefore(c).append(c);if(c.is('textarea')){this.containerWrapper=cw=$('<div>').insertBefore(c).append(c);w.addClass('scroll-textarea');}cw.addClass('scroll-content').css({\"height\":\"auto\",\"margin-bottom\":browser.scroll.height*-1+'px',\"margin-right\":browser.scroll.width*-1+'px',\"max-height\":\"\"});c.on('scroll'+namespace,function(event){if($.isFunction(o.onScroll)){o.onScroll.call(S,{\"maxScroll\":s.y.maxScrollOffset,\"scroll\":c.scrollTop(),\"size\":s.y.size,\"visible\":s.y.visible},{\"maxScroll\":s.x.maxScrollOffset,\"scroll\":c.scrollLeft(),\"size\":s.x.size,\"visible\":s.x.visible});}s.x.isVisible&&s.x.scroll.bar.css('left',c.scrollLeft()*s.x.kx+'px');s.y.isVisible&&s.y.scroll.bar.css('top',c.scrollTop()*s.y.kx+'px');});w.on('scroll'+namespace,function(){w.scrollTop(0).scrollLeft(0);});if(o.disableBodyScroll){var handleMouseScroll=function(event){isVerticalScroll(event)?s.y.isVisible&&s.y.mousewheel(event):s.x.isVisible&&s.x.mousewheel(event);};w.on('MozMousePixelScroll'+namespace,handleMouseScroll);w.on('mousewheel'+namespace,handleMouseScroll);if(browser.mobile){w.on('touchstart'+namespace,function(event){var touch=event.originalEvent.touches&&event.originalEvent.touches[0]||event;var originalTouch={\"pageX\":touch.pageX,\"pageY\":touch.pageY};var originalScroll={\"left\":c.scrollLeft(),\"top\":c.scrollTop()};$(document).on('touchmove'+namespace,function(event){var touch=event.originalEvent.targetTouches&&event.originalEvent.targetTouches[0]||event;c.scrollLeft(originalScroll.left+originalTouch.pageX-touch.pageX);c.scrollTop(originalScroll.top+originalTouch.pageY-touch.pageY);event.preventDefault();});$(document).on('touchend'+namespace,function(){$(document).off(namespace);});});}}if($.isFunction(o.onInit)){o.onInit.apply(this,[c]);}}else{cw.css({\"height\":\"auto\",\"margin-bottom\":browser.scroll.height*-1+'px',\"margin-right\":browser.scroll.width*-1+'px',\"max-height\":\"\"});}$.each(s,function(d,scrollx){var scrollCallback=null;var scrollForward=1;var scrollOffset=(d==='x')?'scrollLeft':'scrollTop';var scrollStep=o.scrollStep;var scrollTo=function(){var currentOffset=c[scrollOffset]();c[scrollOffset](currentOffset+scrollStep);if(scrollForward==1&&(currentOffset+scrollStep)>=scrollToValue)currentOffset=c[scrollOffset]();if(scrollForward==-1&&(currentOffset+scrollStep)<=scrollToValue)currentOffset=c[scrollOffset]();if(c[scrollOffset]()==currentOffset&&scrollCallback){scrollCallback();}}\nvar scrollToValue=0;if(!scrollx.scroll){scrollx.scroll=S._getScroll(o['scroll'+d]).addClass('scroll-'+d);if(o.showArrows){scrollx.scroll.addClass('scroll-element_arrows_visible');}scrollx.mousewheel=function(event){if(!scrollx.isVisible||(d==='x'&&isVerticalScroll(event))){return true;}if(d==='y'&&!isVerticalScroll(event)){s.x.mousewheel(event);return true;}var delta=event.originalEvent.wheelDelta*-1||event.originalEvent.detail;var maxScrollValue=scrollx.size-scrollx.visible-scrollx.offset;if((delta>0&&scrollToValue<maxScrollValue)||(delta<0&&scrollToValue>0)){scrollToValue=scrollToValue+delta;if(scrollToValue<0)scrollToValue=0;if(scrollToValue>maxScrollValue)scrollToValue=maxScrollValue;S.scrollTo=S.scrollTo||{};S.scrollTo[scrollOffset]=scrollToValue;setTimeout(function(){if(S.scrollTo){c.stop().animate(S.scrollTo,240,'linear',function(){scrollToValue=c[scrollOffset]();});S.scrollTo=null;}},1);}event.preventDefault();return false;};scrollx.scroll.on('MozMousePixelScroll'+namespace,scrollx.mousewheel).on('mousewheel'+namespace,scrollx.mousewheel).on('mouseenter'+namespace,function(){scrollToValue=c[scrollOffset]();});scrollx.scroll.find('.scroll-arrow, .scroll-element_track').on('mousedown'+namespace,function(event){if(event.which!=1)return true;scrollForward=1;var data={\"eventOffset\":event[(d==='x')?'pageX':'pageY'],\"maxScrollValue\":scrollx.size-scrollx.visible-scrollx.offset,\"scrollbarOffset\":scrollx.scroll.bar.offset()[(d==='x')?'left':'top'],\"scrollbarSize\":scrollx.scroll.bar[(d==='x')?'outerWidth':'outerHeight']()};var timeout=0,timer=0;if($(this).hasClass('scroll-arrow')){scrollForward=$(this).hasClass(\"scroll-arrow_more\")?1:-1;scrollStep=o.scrollStep*scrollForward;scrollToValue=scrollForward>0?data.maxScrollValue:0;}else{scrollForward=(data.eventOffset>(data.scrollbarOffset+data.scrollbarSize)?1:(data.eventOffset<data.scrollbarOffset?-1:0));scrollStep=Math.round(scrollx.visible*0.75)*scrollForward;scrollToValue=(data.eventOffset-data.scrollbarOffset-(o.stepScrolling?(scrollForward==1?data.scrollbarSize:0):Math.round(data.scrollbarSize/2)));scrollToValue=c[scrollOffset]()+(scrollToValue/scrollx.kx);}S.scrollTo=S.scrollTo||{};S.scrollTo[scrollOffset]=o.stepScrolling?c[scrollOffset]()+scrollStep:scrollToValue;if(o.stepScrolling){scrollCallback=function(){scrollToValue=c[scrollOffset]();clearInterval(timer);clearTimeout(timeout);timeout=0;timer=0;};timeout=setTimeout(function(){timer=setInterval(scrollTo,40);},o.duration+100);}setTimeout(function(){if(S.scrollTo){c.animate(S.scrollTo,o.duration);S.scrollTo=null;}},1);return S._handleMouseDown(scrollCallback,event);});scrollx.scroll.bar.on('mousedown'+namespace,function(event){if(event.which!=1)return true;var eventPosition=event[(d==='x')?'pageX':'pageY'];var initOffset=c[scrollOffset]();scrollx.scroll.addClass('scroll-draggable');$(document).on('mousemove'+namespace,function(event){var diff=parseInt((event[(d==='x')?'pageX':'pageY']-eventPosition)/scrollx.kx,10);c[scrollOffset](initOffset+diff);});return S._handleMouseDown(function(){scrollx.scroll.removeClass('scroll-draggable');scrollToValue=c[scrollOffset]();},event);});}});$.each(s,function(d,scrollx){var scrollClass='scroll-scroll'+d+'_visible';var scrolly=(d==\"x\")?s.y:s.x;scrollx.scroll.removeClass(scrollClass);scrolly.scroll.removeClass(scrollClass);cw.removeClass(scrollClass);});$.each(s,function(d,scrollx){$.extend(scrollx,(d==\"x\")?{\"offset\":parseInt(c.css('left'),10)||0,\"size\":c.prop('scrollWidth'),\"visible\":w.width()}:{\"offset\":parseInt(c.css('top'),10)||0,\"size\":c.prop('scrollHeight'),\"visible\":w.height()});});this._updateScroll('x',this.scrollx);this._updateScroll('y',this.scrolly);if($.isFunction(o.onUpdate)){o.onUpdate.apply(this,[c]);}$.each(s,function(d,scrollx){var cssOffset=(d==='x')?'left':'top';var cssFullSize=(d==='x')?'outerWidth':'outerHeight';var cssSize=(d==='x')?'width':'height';var offset=parseInt(c.css(cssOffset),10)||0;var AreaSize=scrollx.size;var AreaVisible=scrollx.visible+offset;var scrollSize=scrollx.scroll.size[cssFullSize]()+(parseInt(scrollx.scroll.size.css(cssOffset),10)||0);if(o.autoScrollSize){scrollx.scrollbarSize=parseInt(scrollSize*AreaVisible/AreaSize,10);scrollx.scroll.bar.css(cssSize,scrollx.scrollbarSize+'px');}scrollx.scrollbarSize=scrollx.scroll.bar[cssFullSize]();scrollx.kx=((scrollSize-scrollx.scrollbarSize)/(AreaSize-AreaVisible))||1;scrollx.maxScrollOffset=AreaSize-AreaVisible;});c.scrollLeft(initScroll.scrollLeft).scrollTop(initScroll.scrollTop).trigger('scroll');},_getScroll:function(scroll){var types={advanced:['<div class=\"scroll-element\">','<div class=\"scroll-element_corner\"></div>','<div class=\"scroll-arrow scroll-arrow_less\"></div>','<div class=\"scroll-arrow scroll-arrow_more\"></div>','<div class=\"scroll-element_outer\">','<div class=\"scroll-element_size\"></div>','<div class=\"scroll-element_inner-wrapper\">','<div class=\"scroll-element_inner scroll-element_track\">','<div class=\"scroll-element_inner-bottom\"></div>','</div>','</div>','<div class=\"scroll-bar\">','<div class=\"scroll-bar_body\">','<div class=\"scroll-bar_body-inner\"></div>','</div>','<div class=\"scroll-bar_bottom\"></div>','<div class=\"scroll-bar_center\"></div>','</div>','</div>','</div>'].join(''),simple:['<div class=\"scroll-element\">','<div class=\"scroll-element_outer\">','<div class=\"scroll-element_size\"></div>','<div class=\"scroll-element_track\"></div>','<div class=\"scroll-bar\"></div>','</div>','</div>'].join('')};if(types[scroll]){scroll=types[scroll];}if(!scroll){scroll=types['simple'];}if(typeof(scroll)=='string'){scroll=$(scroll).appendTo(this.wrapper);}else{scroll=$(scroll);}$.extend(scroll,{bar:scroll.find('.scroll-bar'),size:scroll.find('.scroll-element_size'),track:scroll.find('.scroll-element_track')});return scroll;},_handleMouseDown:function(callback,event){var namespace=this.namespace;$(document).on('blur'+namespace,function(){$(document).add('body').off(namespace);callback&&callback();});$(document).on('dragstart'+namespace,function(event){event.preventDefault();return false;});$(document).on('mouseup'+namespace,function(){$(document).add('body').off(namespace);callback&&callback();});$('body').on('selectstart'+namespace,function(event){event.preventDefault();return false;});event&&event.preventDefault();return false;},_updateScroll:function(d,scrollx){var container=this.container,containerWrapper=this.containerWrapper||container,scrollClass='scroll-scroll'+d+'_visible',scrolly=(d==='x')?this.scrolly:this.scrollx,offset=parseInt(this.container.css((d==='x')?'left':'top'),10)||0,wrapper=this.wrapper;var AreaSize=scrollx.size;var AreaVisible=scrollx.visible+offset;scrollx.isVisible=(AreaSize-AreaVisible)>1;if(scrollx.isVisible){scrollx.scroll.addClass(scrollClass);scrolly.scroll.addClass(scrollClass);containerWrapper.addClass(scrollClass);}else{scrollx.scroll.removeClass(scrollClass);scrolly.scroll.removeClass(scrollClass);containerWrapper.removeClass(scrollClass);}if(d==='y'){if(container.is('textarea')||AreaSize<AreaVisible){containerWrapper.css({\"height\":(AreaVisible+browser.scroll.height)+'px',\"max-height\":\"none\"});}else{containerWrapper.css({\"max-height\":(AreaVisible+browser.scroll.height)+'px'});}}if(scrollx.size!=container.prop('scrollWidth')||scrolly.size!=container.prop('scrollHeight')||scrollx.visible!=wrapper.width()||scrolly.visible!=wrapper.height()||scrollx.offset!=(parseInt(container.css('left'),10)||0)||scrolly.offset!=(parseInt(container.css('top'),10)||0)){$.extend(this.scrollx,{\"offset\":parseInt(container.css('left'),10)||0,\"size\":container.prop('scrollWidth'),\"visible\":wrapper.width()});$.extend(this.scrolly,{\"offset\":parseInt(container.css('top'),10)||0,\"size\":this.container.prop('scrollHeight'),\"visible\":wrapper.height()});this._updateScroll(d==='x'?'y':'x',scrolly);}}};var CustomScrollbar=BaseScrollbar;$.fn.scrollbar=function(command,args){if(typeof command!=='string'){args=command;command='init';}if(typeof args==='undefined'){args=[];}if(!$.isArray(args)){args=[args];}this.not('body, .scroll-wrapper').each(function(){var element=$(this),instance=element.data(browser.data.name);if(instance||command==='init'){if(!instance){instance=new CustomScrollbar(element);}if(instance[command]){instance[command].apply(instance,args);}}});return this;};$.fn.scrollbar.options=defaults;var updateScrollbars=(function(){var timer=0,timerCounter=0;return function(force){var i,container,options,scroll,wrapper,scrollx,scrolly;for(i=0;i<browser.scrolls.length;i++){scroll=browser.scrolls[i];container=scroll.container;options=scroll.options;wrapper=scroll.wrapper;scrollx=scroll.scrollx;scrolly=scroll.scrolly;if(force||(options.autoUpdate&&wrapper&&wrapper.is(':visible')&&(container.prop('scrollWidth')!=scrollx.size||container.prop('scrollHeight')!=scrolly.size||wrapper.width()!=scrollx.visible||wrapper.height()!=scrolly.visible))){scroll.init();if(options.debug){window.console&&console.log({scrollHeight:container.prop('scrollHeight')+':'+scroll.scrolly.size,scrollWidth:container.prop('scrollWidth')+':'+scroll.scrollx.size,visibleHeight:wrapper.height()+':'+scroll.scrolly.visible,visibleWidth:wrapper.width()+':'+scroll.scrollx.visible},true);timerCounter++;}}}if(debug&&timerCounter>10){window.console&&console.log('Scroll updates exceed 10');updateScrollbars=function(){};}else{clearTimeout(timer);timer=setTimeout(updateScrollbars,300);}};})();function getBrowserScrollSize(actualSize){if(browser.webkit&&!actualSize){return{\"height\":0,\"width\":0};}if(!browser.data.outer){var css={\"border\":\"none\",\"box-sizing\":\"content-box\",\"height\":\"200px\",\"margin\":\"0\",\"padding\":\"0\",\"width\":\"200px\"};browser.data.inner=$(\"<div>\").css($.extend({},css));browser.data.outer=$(\"<div>\").css($.extend({\"left\":\"-1000px\",\"overflow\":\"scroll\",\"position\":\"absolute\",\"top\":\"-1000px\"},css)).append(browser.data.inner).appendTo(\"body\");}browser.data.outer.scrollLeft(1000).scrollTop(1000);return{\"height\":Math.ceil((browser.data.outer.offset().top-browser.data.inner.offset().top)||0),\"width\":Math.ceil((browser.data.outer.offset().left-browser.data.inner.offset().left)||0)};}function isScrollOverlaysContent(){var scrollSize=getBrowserScrollSize(true);return!(scrollSize.height||scrollSize.width);}function isVerticalScroll(event){var e=event.originalEvent;if(e.axis&&e.axis===e.HORIZONTAL_AXIS)return false;if(e.wheelDeltaX)return false;return true;}if(window.angular){(function(angular){angular.module('jQueryScrollbar',[]).provider('jQueryScrollbar',function(){var defaultOptions=defaults;return{setOptions:function(options){angular.extend(defaultOptions,options);},$get:function(){return{options:angular.copy(defaultOptions)};}};}).directive('jqueryScrollbar',['jQueryScrollbar','$parse',function(jQueryScrollbar,$parse){return{\"restrict\":\"AC\",\"link\":function(scope,element,attrs){var model=$parse(attrs.jqueryScrollbar),options=model(scope);element.scrollbar(options||jQueryScrollbar.options).on('$destroy',function(){element.scrollbar('destroy');});}};}]);})(window.angular);}}));";
var mod_pagespeed_OXpPtZy$DS = "(function($){\"use strict\";$('.scrollbar-inner').scrollbar();$(\".leftnavigationbullet ul li\").hover(function(){$(this).children(\".descli\").show();},function(){if(!$(this).hasClass(\"active\")){$(this).children(\".descli\").hide();}});$(\".boximageout #overlay3\").hover(function(){$(this).next().css(\"transform\",\"scale(1.1)\");},function(){$(this).next().css(\"transform\",\"scale(1)\");});$(\".formdatadiri  .submit\").click(function(){$(\".total\").click();})\n$(\".backto1\").click(function(){$(\".info\").click();})\n$(\".backto2\").click(function(){$(\".total \").click();})\n$(\".submitto3\").click(function(){$(\".metode\").click();})\n$(\".matauanglist ul li a.rp\").click(function(e){$(\".jumlahdonasi\").show();$(\".rupiah\").show();$(\".dolar\").hide();$(\".matauanglist ul li a\").removeClass(\"active\");$(this).addClass(\"active\");$(\".jumlahdonasilain\").hide();$(\".jumlah_lainnya\").val(\"\");$(\".rupiah ul li a\").removeClass(\"active\");$(\".dolar ul li a\").removeClass(\"active\");e.preventDefault();})\n$(\".rupiah ul li:not(:first):not(:last) a\").click(function(e){$(\".jumlahdonasilain\").hide();$(\".jumlah_lainnya\").val(\"\");$(\".rupiah ul li a\").removeClass(\"active\");$(this).addClass(\"active\");e.preventDefault();});$(\".rupiah ul li a.klik_lainnya\").click(function(e){$(\".jumlahdonasilain\").show();$(\".rupiah ul li:not(:first):not(:last) a\").removeClass(\"active\");$(this).addClass(\"active\");$(\".symbolcurrency\").text(\"Rp\");e.preventDefault();})\n$(\".dolar ul li:not(:first):not(:last) a\").click(function(e){$(\".jumlahdonasilain\").hide();$(\".jumlah_lainnya\").val(\"\");$(\".dolar ul li a\").removeClass(\"active\");$(this).addClass(\"active\");e.preventDefault();});$(\".dolar ul li a.klik_lainnya\").click(function(e){$(\".jumlahdonasilain\").show();$(\".symbolcurrency\").text(\"$\");$(\".dolar ul li:not(:first):not(:last) a\").removeClass(\"active\");$(this).addClass(\"active\");e.preventDefault();})\n$(\".matauanglist ul li a.usd\").click(function(e){$(\".jumlahdonasi\").show();$(\".dolar\").show();$(\".rupiah\").hide();$(\".matauanglist ul li a\").removeClass(\"active\");$(this).addClass(\"active\");$(\".jumlahdonasilain\").hide();$(\".jumlah_lainnya\").val(\"\");$(\".rupiah ul li a\").removeClass(\"active\");$(\".dolar ul li a\").removeClass(\"active\");e.preventDefault();})\n$(\".tabs-donasi ul li a.info\").click(function(e){$(\".metode_isi\").removeClass(\"active\");$(\".formdatadiri\").addClass(\"active\");$(\".tabs-donasi ul li a\").removeClass(\"active\");$(this).addClass(\"active\");$(\".amount_isi\").hide();e.preventDefault();})\n$(\".tabs-donasi ul li a.total\").click(function(e){if($(\".formdatadiri .name\").val()==\"\"||$(\".formdatadiri .email\").val()==\"\"){$(\".errorformdatadiri\").show();$(\".metodelist ul li a\").removeClass(\"active\");e.preventDefault();}else{$(\".errorformdatadiri\").hide();$(\".amount_isi\").show();$(\".formdatadiri\").removeClass(\"active\");$(\".tabs-donasi ul li a\").removeClass(\"active\");$(\".metode_isi\").hide();$(\".metodelist ul li a\").removeClass(\"active\");$(this).addClass(\"active\");e.preventDefault();}e.preventDefault();})\n$(\".tabs-donasi ul li a.metode\").click(function(e){if($(\".matauanglist ul li a\").hasClass(\"active\")){if($(\".matauanglist ul li a.rp\").hasClass(\"active\")){if($(\".rupiah ul li:not(:first):not(:last) a\").hasClass(\"active\")||($(\".rupiah ul li:last a\").hasClass(\"active\")&&$(\".jumlah_lainnya\").val()!=\"\")){$(\".amount_isi\").hide();$(\".metodelist ul li:last\").hide();$(\".metode_isi\").show();$(\".tabs-donasi ul li a\").removeClass(\"active\");$(this).addClass(\"active\");e.preventDefault();}e.preventDefault();}if($(\".matauanglist ul li a.usd\").hasClass(\"active\")){if($(\".dolar ul li:not(:first):not(:last) a\").hasClass(\"active\")||($(\".dolar ul li:last a\").hasClass(\"active\")&&$(\".jumlah_lainnya\").val()!=\"\")){$(\".amount_isi\").hide();$(\".metode_isi\").show();$(\".metodelist ul li:last\").show();$(\".tabs-donasi ul li a\").removeClass(\"active\");$(this).addClass(\"active\");e.preventDefault();}e.preventDefault();}e.preventDefault();}else{$(\".errorjumlahdonasi\").show();e.preventDefault();}})\n$(\".metodelist ul li a\").click(function(e){$(\".metodelist ul li a\").removeClass(\"active\");$(this).addClass(\"active\");})\n$(\".metodelist ul li a:first\").click(function(e){var totalnya=0;if($(\".rupiah ul li:not(:first):not(:last) a\").hasClass(\"active\")){totalnya=$(\".rupiah ul li:not(:first):not(:last) a.active\").attr(\"data-id\");if(totalnya.length>2){totalnya=(totalnya/1000).toFixed(3);}else{totalnya=totalnya;}totalnya=\"Rp \"+totalnya;}if($(\".rupiah ul li:last a\").hasClass(\"active\")){if($(\".jumlah_lainnya\").val().length>2){totalnya=($(\".jumlah_lainnya\").val()/1000).toFixed(3);}else{totalnya=$(\".jumlah_lainnya\").val();}totalnya=\"Rp \"+totalnya;}if($(\".dolar ul li:not(:first):not(:last) a\").hasClass(\"active\")){totalnya=$(\".dolar ul li:not(:first):not(:last) a.active\").attr(\"data-id\");if(totalnya.length>2){totalnya=(totalnya/1000).toFixed(3);}else{totalnya=totalnya;}totalnya=\"$ \"+totalnya;}if($(\".dolar ul li:last a\").hasClass(\"active\")){if($(\".jumlah_lainnya\").val().length>2){totalnya=($(\".jumlah_lainnya\").val()/1000).toFixed(3);}else{totalnya=$(\".jumlah_lainnya\").val();}totalnya=\"$ \"+$(\".jumlah_lainnya\").val();}$(\"#amountpopup\").text(totalnya);$('#donatemodal').modal('show');})\nfunction formatRupiah(angka,prefix){var number_string=angka.replace(/[^,\\d]/g,'').toString(),split=number_string.split(','),sisa=split[0].length%3,rupiah=split[0].substr(0,sisa),ribuan=split[0].substr(sisa).match(/\\d{3}/gi);if(ribuan){separator=sisa?'.':'';rupiah+=separator+ribuan.join('.');}rupiah=split[1]!=undefined?rupiah+','+split[1]:rupiah;return prefix==undefined?rupiah:(rupiah?'Rp. '+rupiah:'');}$(\".donatenow\").click(function(e){if($(\".metodelist ul li a\").hasClass(\"active\")){var matauang=\"\";if($(\".matauanglist ul li a.rp\").hasClass(\"active\")){matauang=\"rp\";var totalnya=0;if($(\".rupiah ul li:not(:first):not(:last) a\").hasClass(\"active\")){totalnya=$(\".rupiah ul li:not(:first):not(:last) a.active\").attr(\"data-id\");}if($(\".rupiah ul li:last a\").hasClass(\"active\")){totalnya=$(\".jumlah_lainnya\").val();}}if($(\".matauanglist ul li a.usd\").hasClass(\"active\")){matauang=\"usd\";var totalnya=0;if($(\".dolar ul li:not(:first):not(:last) a\").hasClass(\"active\")){totalnya=$(\".dolar ul li:not(:first):not(:last) a.active\").attr(\"data-id\");}if($(\".dolar ul li:last a\").hasClass(\"active\")){totalnya=$(\".jumlah_lainnya\").val();}}var metode=$(\".metodelist ul li a.active\").attr(\"data-id\");var urlnya=$(\"#base_urlnya\").val();var name=$(\".formdatadiri .name\").val();var email=$(\".formdatadiri .email\").val();var hp=$(\".formdatadiri .hp\").val();var all_url=$(\"#base_urlnya_all\").val();$.ajax({type:\"POST\",url:urlnya+\"donatenow\",dataType:'json',data:{\"total\":totalnya,\"matauang\":matauang,\"name\":name,\"email\":email,\"hp\":hp,\"metode\":metode},beforeSend:function(){$(this).find(\".submit\").text(\"Loading...\");},complete:function(){$(this).find(\".submit\").text(\"Submit\");},success:function(xml){if(xml.id>0){if(metode==\"transfer\"){window.location.href=\"\"+all_url+\"/?donate=1&uid=\"+xml.encode;}else{window.location.href=\"\"+all_url+\"/?paypal=1&uid=\"+xml.encode;}}}});e.preventDefault();}else{alert(\"salah\");}})\n$(\".metodelist ul li a\").click(function(e){$(this).addClass(\"active\");e.preventDefault();})\n$('.owl-carousel').owlCarousel({loop:false,margin:20,nav:true,responsive:{0:{items:1},560:{items:2},1000:{items:3}}});$(\".leftnavigationbullet ul li\").click(function(){$(\".leftnavigationbullet ul li\").children(\".descli\").hide();var target=$(this).children(\".descli\").children(\".titlenumberlist\").children(\"a\").attr(\"href\");$('html, body').stop().animate({scrollTop:$(target).offset().top},600,function(){});return false;})\n$(document).on('change','#qty123',function(e){$(\".qtynya\").val($(this).val());})\n$(\".buttonbuy\").click(function(e){var href=$(this).attr(\"href\");$.ajax({type:\"GET\",url:href,dataType:'html',data:{},beforeSend:function(){$(this).find(\".submit\").text(\"Loading...\");},complete:function(){$(this).find(\".submit\").text(\"Submit\");},success:function(xml){$('#exampleModalCenter .modal-content').html(xml);$('#exampleModalCenter').modal('show');}});e.preventDefault();})\n$('body').on('hidden.bs.modal','.modal',function(){$(this).removeData('bs.modal');});$(document).on('submit','.popupform',function(e){var name=$(this).find(\".name\").val();var address=$(this).find(\".address\").val();var email=$(this).find(\".email\").val();var sister=$(this).find(\".sister\").val();var hp=$(this).find(\".hp\").val();var qtynya=$(this).find(\".qtynya\").val();var baseurl=$(this).find(\".baseurl\").val();var captcha=$(this).find(\".captcha\").val();$(this).find(\".submit\").text(\"Loading...\");$.ajax({type:\"POST\",url:baseurl+'submitshop',dataType:'html',data:{\"name\":name,\"address\":address,\"email\":email,\"hp\":hp,\"qtynya\":qtynya,\"captcha\":captcha,\"sister\":sister},beforeSend:function(){$(this).find(\".submit\").text(\"Loading...\");},complete:function(){$(this).find(\".submit\").text(\"Submit\");},success:function(xml){if(xml>0){$(\".popupform\").hide();$(\".messagenya\").show();}}});e.preventDefault();});$(window).on(\"load\",function(e){$(\"#loader-box\").fadeOut(\"slow\");})\nvar heightmonitor=$(window).height()-300;$(window).scroll(function(){var scrollDistance_top=$(window).scrollTop();var scrollDistance=$(window).scrollTop();$('.page-section').each(function(i){if($(this).position().top<(scrollDistance-500)){$('.leftnavigationbullet ul li.active').removeClass('active');$('.leftnavigationbullet ul li').eq(i).addClass('active');}});if(scrollDistance_top<heightmonitor){console.log(\"dibawah\"+scrollDistance_top);$(\".leftnavigationbullet\").fadeOut();}else{console.log(\"diatas \"+scrollDistance_top);$(\".leftnavigationbullet\").fadeIn();}}).scroll();var lastScrollTop=0;$(window).scroll(function(){var st=$(this).scrollTop();console.log(st);var newst=st/3;newst=-newst;$(\".daunkanan img\").css(\"margin-top\",newst);$(\".paralax img\").css(\"margin-top\",newst);$(\".daunkiri img\").css(\"margin-top\",newst);$(\".daunbawah1 img\").css(\"margin-bottom\",-newst);if(st>lastScrollTop){$(\".image1 img\").css(\"margin-top\",\"20px\");$(\".image2 img\").css(\"margin-top\",\"-20px\");$(\".image3 img\").css(\"margin-top\",\"-20px\");$(\".image4 img\").css(\"margin-bottom\",\"-20px\");$(\".image5 img\").css(\"margin-bottom\",\"-20px\");$(\".image6 img\").css(\"margin-bottom\",\"20px\");$(\".image7 img\").css(\"margin-bottom\",\"20px\");}else{$(\".image1 img\").css(\"margin-top\",\"-20px\");$(\".image2 img\").css(\"margin-top\",\"20px\");$(\".image3 img\").css(\"margin-top\",\"20px\");$(\".image4 img\").css(\"margin-bottom\",\"20px\");$(\".image5 img\").css(\"margin-bottom\",\"20px\");$(\".image6 img\").css(\"margin-bottom\",\"-20px\");$(\".image7 img\").css(\"margin-bottom\",\"-20px\");}console.log(lastScrollTop);if(lastScrollTop>100){$('#toTop').fadeIn();}else{$('#toTop').fadeOut();}lastScrollTop=st;});$(\"#toTop\").click(function(){$(\"html, body\").animate({scrollTop:0},1000);});$(this).scrollTop(0);var heightlayar=$(window).height();var widthlayar=$(window).width();setTimeout(function(){bottomnya()},1000);setTimeout(function(){bottomnya1()},2000);function showMenu(){$(\".navigate\").show();}function hideMenu(){$(\".navigate\").hide();}function bottomnya(){setTimeout(function(){topnya()},1000);}function topnya(){setTimeout(function(){bottomnya()},1000);}function bottomnya1(){$(\".rangkongkecil img\").addClass(\"gotop\");$(\".rangkongkecil img\").removeClass(\"gobottom\");$(\".rangkongkecil2 img\").addClass(\"gotop\");$(\".rangkongkecil2 img\").removeClass(\"gobottom\");$(\".rangkongbesar img\").addClass(\"gotop\");$(\".rangkongbesar img\").removeClass(\"gobottom\");setTimeout(function(){topnya1()},2000);}function topnya1(){$(\".rangkongkecil img\").addClass(\"gobottom\");$(\".rangkongkecil img\").removeClass(\"gotop\");$(\".rangkongkecil2 img\").addClass(\"gobottom\");$(\".rangkongkecil2 img\").removeClass(\"gotop\");$(\".rangkongbesar img\").addClass(\"gobottom\");$(\".rangkongbesar img\").removeClass(\"gotop\");setTimeout(function(){bottomnya1()},2000);}$(\".js-menu-trigger\").click(function(){if($(\".hamburger--squeeze\").hasClass(\"is-active\")){$(\".hamburger--squeeze\").removeClass(\"is-active\");$(\".main-menu__heading\").removeClass(\"is-active\");$(\".main-menu__background--dark\").css(\"width\",\"0%\");$(\".main-menu__background--light\").css(\"width\",\"0%\");$(\".main-menu\").removeClass(\"open\");$(\".navigate ul li span.main-menu__link\").removeClass(\"garislurus\");if(widthlayar>991){$(\"ul.submenu\").hide();}hideMenu();$(\"body\").removeAttr(\"style\");}else{$(\".main-menu__background--dark\").css(\"width\",\"100%\");$(\".main-menu__background--light\").css(\"width\",\"100%\");setTimeout(function(){showMenu()},500);$(\".hamburger--squeeze\").addClass(\"is-active\");$(\".main-menu__heading\").addClass(\"is-active\");$(\".main-menu\").addClass(\"open\");$(\"body\").css(\"overflow\",\"hidden\");}});if(widthlayar>991){$(\".navigate ul li span.main-menu__link\").hover(function(){$(\".navigate ul li span.main-menu__link\").removeClass(\"garislurus\");$(\"ul.submenu\").hide();$(this).parent().next().show();$(this).addClass(\"garislurus\");$(\".main-menu__background--dark\").css(\"width\",\"50%\");});}else{heightlayar=heightlayar-150;$(\".navigate\").height(heightlayar);$(\".navigate\").css(\"overflow\",\"scroll\");}$(\".scrolldown\").click(function(){$('html, body').animate({scrollTop:$(\"#content_tentang\").offset().top},2000);});$(\"img\").removeAttr(\"width\");$(\"img\").removeAttr(\"height\");})(jQuery);";