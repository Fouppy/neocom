/* Author:

*/

/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Egzpo = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      jQuery(document).ready(function($) {

        var $window     = $(window);
        var $this       = $(this);
        var $body       = $('body');
        var $navbar     = $('.x-navbar');
        var $prehead    = $('.prehead');
        var $navbarWrap = $('.x-navbar-wrap');
        var $contactUp  = $('.contact-up');
        var $contact    = $('.x-nav li:last-child a');
        var $fermer     = $('.fermer');

        $contactUp.hide();

        $('.x-btn-navbar').click(function(e){
          e.preventDefault();
        });
  
        $contact.click(function(e){
          e.preventDefault();
          $('.x-nav-collapse').collapse('hide');
          $contactUp.slideToggle();
          $body.scrollTop(0);
          $prehead.toggleClass('prehead-absolute');
        });
  
        $fermer.click(function(e){
          e.preventDefault();
          $contactUp.slideToggle();
          $body.scrollTop(0);
          $prehead.toggleClass('prehead-absolute');
        });

        $window.scroll(function() {
          var $menutop = $navbarWrap.offset().top - $navbar.outerHeight();
          var $current = $this.scrollTop();
          if ($current >= $menutop) {
            $navbar.addClass('x-navbar-fixed-top');
            $prehead.removeClass('prehead-absolute');
            $prehead.addClass('prehead-fixed');
          } else {
            $navbar.removeClass('x-navbar-fixed-top');
            // $prehead.addClass('prehead-absolute');
            $prehead.removeClass('prehead-fixed');
          }
          // var $contacttop = $contactUp.outerHeight();
          // if ($current >= $contacttop) {
          //   $prehead.removeClass('prehead-absolute');
          //   $prehead.addClass('prehead-fixed');
          // } else {
          //   // $prehead.addClass('prehead-absolute');
          //   $prehead.removeClass('prehead-fixed');
          // }

        });

      });
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
  nos_references: {
    init: function() {

      var toggleView = ('.toggle-view'),
          all = $('.all'),
          open = $('.open'),
          close = $('.close'),
          plus = $('.plus'),
          moins = $('.moins'),
          target = all.attr('href');

      $(toggleView).show();
      $(moins).hide();
      $(target).hide();
      $(close).addClass('selected');


  
      $(all).click(function(e){
        e.preventDefault();
        $(target).slideToggle();
        $(moins).toggle();
        $(plus).toggle();
        $(open).toggleClass('selected');
        $(close).toggleClass('selected');
      });

    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Egzpo;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.