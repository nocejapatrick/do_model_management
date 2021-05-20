(function($){'use strict';window.addEventListener('load',function(){var nextSelector=selector['nextSelector'];var navigationSelector=selector['navigationSelector'];var contentSelector=selector['contentSelector'];var itemSelector=selector['itemSelector'];var themeName=selector.theme;if(''!==contentSelector){itemSelector=selector['contentSelector']+' '+selector['itemSelector'];}else{itemSelector=selector['itemSelector'];}
var destUrl=$(nextSelector).attr('href');var finished=false;var flag=false;if($(nextSelector).length&&$(navigationSelector).length&&$(itemSelector).length){$(navigationSelector).css('display','none');$('body').addClass('infinite-scroll');var trigger=selector['event'];$(itemSelector).last().after('<div id="ctis-loading" class="infinite-loader ctis-loader-elements"><span class="spinner"><img src="'+
selector['image']+'" alt="catch-infinite-scroll-loader"></span></div>');if('click'==trigger){$(itemSelector).last().after('<div id="infinite-handle" class="ctis-load-more-container ctis-loader-elements"><span class="ctis-load-more"><button>'+
selector['load_more_text']+'</button></span></div>');load_on_click();}else{load_on_scroll();}
$(window).on('scroll',function(){var t=$(this),elem=$(itemSelector).last();if(typeof elem=='undefined'){return;}
if(finished&&t.scrollTop()+t.height()>=elem.offset().top+elem.height()){setTimeout(function(){$('.ctis-finished-notice').fadeOut('slow');},3000);}});}
function ctis_load_more(){$.ajax({url:destUrl,beforeSend:show_loader(),success:function(results){if(selector['jetpack_enabled']){$('.infinite-loader').css('text-indent','0');$('.infinite-loader').css('height','auto');}
hide_loader();var obj=$(results);var elem=obj.find(itemSelector);var next=obj.find(nextSelector);if(next.length!==0){$(nextSelector).attr('href',next.attr('href'));}
elem=elem.each(function(index,value){var el;if($(value).find('img').hasClass('lazy')&&$(value).find('img').attr('data-src')!==undefined){var src=$(value).find('img').attr('data-src');$(value).find('img').attr('src',src).removeClass('lazy').removeAttr('data-src');}
var el;if('twentytwenty'===themeName){var hr=document.createElement('HR');hr.classList.add('post-separator','styled-separator','is-style-wide','section-inner');el=$(value).prepend(hr);}else{el=$(value);}
return el;});elem.each(function(i,v){$(itemSelector).last().after($(this));});if(next.length!==0&&next.attr('href')!='#'){destUrl=$(nextSelector).attr('href');}else{finished=true;$('body').addClass('infinity-end');$('.ctis-load-more-container').hide();$(itemSelector).last().after('<div class="ctis-finished-notice infinite-loader ctis-loader-elements"><span class="finish-text spinner">'+
selector['finish_text']+'</span></div>');}},error:function(){hide_loader();},});}
function show_loader(){flag=true;$('#ctis-loading').show();$('.ctis-load-more-container').hide();}
function hide_loader(){$('#ctis-loading').hide();$('.ctis-load-more-container').show();setTimeout(function(){flag=false;},500);}
function load_on_scroll(){$(window).on('scroll',function(){var t=$(this),elem=$(itemSelector).last();if(typeof elem=='undefined'){return;}
if(flag===false&&!finished&&t.scrollTop()+t.height()>=elem.offset().top+elem.height()){ctis_load_more();}});}
function load_on_click(){$('body').on('click','.ctis-load-more',function(){ctis_load_more();});}});})(jQuery);