$('.button-menu').click(function(event){
	event.preventDefault();
    $('body').toggleClass('slide-active');
    $(this).toggleClass('active');
});

// Sticky Plugin v1.0.0 for jQuery
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Created: 2/14/2011
// Date: 2/12/2012
// Website: http://labs.anthonygarand.com/sticky
// Description: Makes an element on the page stick on the screen as you scroll
//       It will only set the 'top' and 'position' of your element, you
//       might need to adjust the width in some cases.

(function($) {
  var defaults = {
      topSpacing: 0,
      bottomSpacing: 0,
      className: 'is-sticky',
      wrapperClassName: 'sticky-wrapper',
      center: false,
      getWidthFrom: ''
    },
    $window = $(window),
    $document = $(document),
    sticked = [],
    windowHeight = $window.height(),
    scroller = function() {
      var scrollTop = $window.scrollTop(),
        documentHeight = $document.height(),
        dwh = documentHeight - windowHeight,
        extra = (scrollTop > dwh) ? dwh - scrollTop : 0;

      for (var i = 0; i < sticked.length; i++) {
        var s = sticked[i],
          elementTop = s.stickyWrapper.offset().top,
          etse = elementTop - s.topSpacing - extra;

        if (scrollTop <= etse) {
          if (s.currentTop !== null) {
            s.stickyElement
              .css('position', '')
              .css('top', '');
            s.stickyElement.parent().removeClass(s.className);
            s.currentTop = null;
          }
        }
        else {
          var newTop = documentHeight - s.stickyElement.outerHeight()
            - s.topSpacing - s.bottomSpacing - scrollTop - extra;
          if (newTop < 0) {
            newTop = newTop + s.topSpacing;
          } else {
            newTop = s.topSpacing;
          }
          if (s.currentTop != newTop) {
            s.stickyElement
              .css('position', 'fixed')
              .css('top', newTop);

            s.stickyElement.parent().addClass(s.className);
            s.currentTop = newTop;
          }
        }
      }
    },
    resizer = function() {
      windowHeight = $window.height();
    },
    methods = {
      init: function(options) {
        var o = $.extend(defaults, options);
        return this.each(function() {
          var stickyElement = $(this);

          var stickyId = stickyElement.attr('id');
          var wrapper = $('<div></div>')
            .attr('id', 'main' + '-sticky-wrapper')
            .addClass(o.wrapperClassName);
          stickyElement.wrapAll(wrapper);

          if (o.center) {
            stickyElement.parent().css({marginLeft:"auto",marginRight:"auto"});
          }

          if (stickyElement.css("float") == "right") {
            stickyElement.css({"float":"none"}).parent().css({"float":"right"});
          }

          var stickyWrapper = stickyElement.parent();
          stickyWrapper.css('height', stickyElement.outerHeight());
          sticked.push({
            topSpacing: o.topSpacing,
            bottomSpacing: o.bottomSpacing,
            stickyElement: stickyElement,
            currentTop: null,
            stickyWrapper: stickyWrapper,
            className: o.className,
            getWidthFrom: o.getWidthFrom
          });
        });
      },
      update: scroller
    };

  // should be more efficient than using $window.scroll(scroller) and $window.resize(resizer):
  if (window.addEventListener) {
    window.addEventListener('scroll', scroller, false);
    window.addEventListener('resize', resizer, false);
  } else if (window.attachEvent) {
    window.attachEvent('onscroll', scroller);
    window.attachEvent('onresize', resizer);
  }

  $.fn.sticky = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method ) {
      return methods.init.apply( this, arguments );
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }
  };
  $(function() {
    setTimeout(scroller, 0);
  });
})(jQuery);
if (matchMedia('only screen and (min-width:57.5em)').matches) {
	$(window).load(function(){
	    $(".is-sticky").sticky({ topSpacing: 0, center:true, className:"stuck" });
	});
}

/*global jQuery */
/*jshint multistr:true browser:true */
/*!
* FitVids 1.0.3
*
* Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/

(function( $ ){

  "use strict";

  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null
    };

    if(!document.getElementById('fit-vids-style')) {

      var div = document.createElement('div'),
          ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0],
          cssStyles = '&shy;<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>';

      div.className = 'fit-vids-style';
      div.id = 'fit-vids-style';
      div.style.display = 'none';
      div.innerHTML = cssStyles;

      ref.parentNode.insertBefore(div,ref);

    }

    if ( options ) {
      $.extend( settings, options );
    }

    return this.each(function(){
      var selectors = [
        "iframe[src*='player.vimeo.com']",
        "iframe[src*='youtube.com']",
        "iframe[src*='youtube-nocookie.com']",
        "iframe[src*='kickstarter.com'][src*='video.html']",
        "object",
        "embed"
      ];

      if (settings.customSelector) {
        selectors.push(settings.customSelector);
      }

      var $allVideos = $(this).find(selectors.join(','));
      $allVideos = $allVideos.not("object object"); // SwfObj conflict patch

      $allVideos.each(function(){
        var $this = $(this);
        if (this.tagName.toLowerCase() === 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
        var height = ( this.tagName.toLowerCase() === 'object' || ($this.attr('height') && !isNaN(parseInt($this.attr('height'), 10))) ) ? parseInt($this.attr('height'), 10) : $this.height(),
            width = !isNaN(parseInt($this.attr('width'), 10)) ? parseInt($this.attr('width'), 10) : $this.width(),
            aspectRatio = height / width;
        if(!$this.attr('id')){
          var videoID = 'fitvid' + Math.floor(Math.random()*999999);
          $this.attr('id', videoID);
        }
        $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  };
// Works with either jQuery or Zepto
})( window.jQuery || window.Zepto );

$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".site-content").fitVids();
  });


$('.watch').click(function(event) {
  event.preventDefault();
  var $src = $(this).attr("data-id");
  $('.feature-video > .content').replaceWith('<iframe width="560" height="315" src="//www.youtube.com/embed/' + $src + '?autoplay=1&controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>');
  $('.feature-video').css('padding', '0').fitVids();
});

/*!
 * Equal Heights
 * Updated 2014-03-19
 * Usage: $(object).equalHeights([minHeight], [maxHeight]);
 *
 * Example 1: $(".cols").equalHeights(); Sets all columns to the same height.
 * Example 2: $(".cols").equalHeights(400); Sets all cols to at least 400px tall.
 * Example 3: $(".cols").equalHeights(100,300); Cols are at least 100 but no more
 * than 300 pixels tall. Elements with too much content will gain a scrollbar.
 */
(function($) {
  $.fn.equalHeights = function(minHeight, maxHeight) {
    tallest = (minHeight) ? minHeight : 0;
    this.css({'height':'auto'});

    if (matchMedia('only screen and (min-width:50em)').matches) {
      this.each(function() {
        if($(this).height() > tallest) {
          tallest = $(this).height();
        }
      });
      if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
      return this.each(function() {
        $(this).height(tallest).css("overflow","visible");
      });
    }
  }
})(jQuery);

$(window).on('load resize', function(){
  $(".secondary").find('.col').equalHeights();
});

$('#template-select').change(function(){
  var returnParams = "";
  $( ":text, textarea, select" ).each(function(event) {
    $value = $(this).val();
    $label = $(this).attr('name');
    returnParams += $label + '=' + $value + '&';
  });
  $template = $(this).val();
  $('.return-value').attr('value', 'http://erezzy.dev/process?template-select=/' + $template  + '&' + returnParams);
});


/*$('#template-select').change(function(){
  $template = $(this).val();
  $('.form-horizontal').attr('action', '/' + $template);
});*/
$(window).load(function(){
  $('.process-form').submit();
});


$('.add_education').click(function(){
  $('.education:hidden:first').slideDown();
});

$('.add_experience').click(function(){
  $('.experience:hidden:first').slideDown();
});

(function($){       
  $.fn.popupWindow = function(instanceSettings){
    
    return this.each(function(){
    
    $(this).click(function(){
    
    $.fn.popupWindow.defaultSettings = {
      centerBrowser:0, // center window over browser window? {1 (YES) or 0 (NO)}. overrides top and left
      centerScreen:0, // center window over entire screen? {1 (YES) or 0 (NO)}. overrides top and left
      height:500, // sets the height in pixels of the window.
      left:0, // left position when the window appears.
      location:0, // determines whether the address bar is displayed {1 (YES) or 0 (NO)}.
      menubar:0, // determines whether the menu bar is displayed {1 (YES) or 0 (NO)}.
      resizable:0, // whether the window can be resized {1 (YES) or 0 (NO)}. Can also be overloaded using resizable.
      scrollbars:0, // determines whether scrollbars appear on the window {1 (YES) or 0 (NO)}.
      status:0, // whether a status line appears at the bottom of the window {1 (YES) or 0 (NO)}.
      width:500, // sets the width in pixels of the window.
      windowName:null, // name of window set from the name attribute of the element that invokes the click
      windowURL:null, // url used for the popup
      top:0, // top position when the window appears.
      toolbar:0 // determines whether a toolbar (includes the forward and back buttons) is displayed {1 (YES) or 0 (NO)}.
    };
    
    settings = $.extend({}, $.fn.popupWindow.defaultSettings, instanceSettings || {});
    
    var windowFeatures =    'height=' + settings.height +
                ',width=' + settings.width +
                ',toolbar=' + settings.toolbar +
                ',scrollbars=' + settings.scrollbars +
                ',status=' + settings.status + 
                ',resizable=' + settings.resizable +
                ',location=' + settings.location +
                ',menuBar=' + settings.menubar;

        settings.windowName = this.name || settings.windowName;
        settings.windowURL = this.href || settings.windowURL;
        var centeredY,centeredX;
      
        if(settings.centerBrowser){
            
          if ($.browser.msie) {//hacked together for IE browsers
            centeredY = (window.screenTop - 120) + ((((document.documentElement.clientHeight + 120)/2) - (settings.height/2)));
            centeredX = window.screenLeft + ((((document.body.offsetWidth + 20)/2) - (settings.width/2)));
          }else{
            centeredY = window.screenY + (((window.outerHeight/2) - (settings.height/2)));
            centeredX = window.screenX + (((window.outerWidth/2) - (settings.width/2)));
          }
          window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + centeredX +',top=' + centeredY).focus();
        }else if(settings.centerScreen){
          centeredY = (screen.height - settings.height)/2;
          centeredX = (screen.width - settings.width)/2;
          window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + centeredX +',top=' + centeredY).focus();
        }else{
          window.open(settings.windowURL, settings.windowName, windowFeatures+',left=' + settings.left +',top=' + settings.top).focus();  
        }
        return false;
      });
      
    }); 
  };
})(jQuery);

$('.newWin').popupWindow({ 
height:500, 
width:800, 
top:50, 
left:50 ,
menubar:0
});

