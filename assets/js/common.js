(function ($) {
    "use strict";
  
    function isMobileDeviceUsed() {
      var t = !1;
      return (
        (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(
          navigator.userAgent
        ) ||
          /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
            navigator.userAgent.substr(0, 4)
          )) &&
          (t = !0),
        t
      );
    }
  
    //start of cusstom
    // $("p").each(function () {
    //   var $this = $(this);
    //   if ($this.html().replace(/\s|&nbsp;/g, "").length == 0) $this.remove();
    // });
  
    //Submenu Dropdown Toggle
    if ($(".main-nav li.menu-item-has-children").length) {
      $(".main-nav li.menu-item-has-children > a").append(
        '<i class="fas fa-angle-down"></i>'
      );
      $(".main-nav li.menu-item-has-children ul").addClass("tt-dropdown-menu");
    }
  
    if ($("#cancel-comment-reply-link").length > 0) {
      $(".comment-reply-title a").addClass("main-color-font");
    }
  
    if ($(".logged-in-as").length > 0) {
      $(".logged-in-as a").addClass("main-color-font");
    }
  
    if ($(".comments-list .children").length) {
      $(".comments-list .children").addClass("comments-list");
    }
  
    $(window).on("elementor/frontend/init", function () {
      if (typeof elementorFrontend != "undefined") {
        if (typeof elementorFrontend.hooks != "undefined") {
          elementorFrontend.hooks.addAction(
            "frontend/element_ready/widget",
            function (scrollTop) {
              $(function () {
                $(".lazy").Lazy({
                  combined: !0,
                  delay: 50,
                });
              });
  
              $(window).scrollTop(), $(window).height();
              $(".on-scroll").length > 0 &&
                $(window).on("scroll load", function () {
                  var t = $(window).scrollTop(),
                    a = $(window).height();
                  $(".on-scroll").each(function () {
                    var i = $(this),
                      e = i.attr("data-scroll-offset"),
                      o = $(this).offset().top;
                    t > o - a * (void 0 !== e ? e : 0.95) &&
                      i.addClass("show-scroll");
                  });
                });
  
              centreTabs();
            }
          );
        }
      }
    });
  
    // $(document).ready(function () {
    //   if (typeof elementorFrontend != "undefined") {
    //     if (typeof elementorFrontend.hooks != "undefined") {
    //       elementorFrontend.hooks.addAction(
    //         "frontend/element_ready/widget",
    //         function (scrollTop) {
    //           $(function () {
    //             $(".lazy").Lazy({
    //               combined: !0,
    //               delay: 50,
    //             });
    //           });
  
    //           $(window).scrollTop(), $(window).height();
    //           $(".on-scroll").length > 0 &&
    //             $(window).on("scroll load", function () {
    //               var t = $(window).scrollTop(),
    //                 a = $(window).height();
    //               $(".on-scroll").each(function () {
    //                 var i = $(this),
    //                   e = i.attr("data-scroll-offset"),
    //                   o = $(this).offset().top;
    //                 t > o - a * (void 0 !== e ? e : 0.95) &&
    //                   i.addClass("show-scroll");
    //               });
    //             });
  
    //           centreTabs();
    //         }
    //       );
    //     }
    //   }
    // });
  
    //end of cusstom
    function lazyLoader() {
      $(function () {
        $(".lazy").Lazy({
          combined: !0,
          delay: 50,
        });
      });
    }
  
    function parallax() {
      var t = document.getElementById("scene");
      new Parallax(t);
    }
  
    function mobileMenu() {
      $(".hamburger").on("click", function () {
        $(".main-nav").addClass("active"), $("body").addClass("active");
      }),
        $(".close-nav").on("click", function () {
          $(".main-nav").removeClass("active"), $("body").removeClass("active");
        });
    }
  
    function mobileNav() {
      $(".main-nav-list a i").on("click", function (t) {
        t.preventDefault();
        var a = $(this),
          i = a.closest("li"),
          e = i.find(".tt-dropdown-menu"),
          o = i.find(".inner-dropdown-menu");
        i.toggleClass("active"),
          e.length > 0 ? e.slideToggle() : o.length > 0 && o.slideToggle();
      }),
        $(document).on("mouseup", function (t) {
          var a = $(".main-nav");
          !a.is(t.target) &&
            0 === a.has(t.target).length &&
            a.hasClass("active") &&
            ($(".main-nav").removeClass("active"),
            $("body").removeClass("active"));
        });
    }
  
    function mobileHeader() {
      var t, a;
      $(window).on("load resize", function () {
        (t = $(this).width()),
          t >= 1200 && void 0 !== a
            ? ((a = $(".main-nav").detach()), a.insertAfter(".top-line .logo"))
            : t < 1200 &&
              ((a = $("header .main-nav").detach()), a.insertAfter("header"));
      });
    }
  
    function firstLettet() {
      $(".f-letter").html(function (t, a) {
        return a.replace(
          /^[^a-zA-Z]*([a-zA-Z])/g,
          '<span class="f-letter-wrap">$1</span>'
        );
      });
    }
  
    function stickyHeder() {
      if (childit_js_object.childit_sticky_header != 0) {
        function t(t) {
          t > o
            ? (i.addClass("is-scroll"), $(".clone-nav").show())
            : (i.removeClass("is-scroll"), $(".clone-nav").hide()),
            t > 0
              ? $(".quickLinks-wrap").addClass("scroll")
              : $(".quickLinks-wrap").removeClass("scroll");
        }
  
        function a() {
          (i = $("header")),
            (e = $(window).scrollTop()),
            (s = i.outerHeight(!0)),
            $(".clone-nav").css("height", s),
            (o =
              $(window).width() <= 992 || $(window).height() <= 570 ? 500 : 199),
            t(e, o);
        }
        if (void 0 !== $("header")) {
          var i = $("header"),
            e = $(window).scrollTop(),
            o = i.offset().top;
          o = $(window).width() <= 992 || $(window).height() <= 570 ? 500 : 199;
          var s = i.outerHeight(!0);
          $('<div class="clone-nav"></div>')
            .insertAfter("header")
            .css("height", s)
            .hide(),
            t(e),
            $(window).on("scroll", function () {
              (e = $(window).scrollTop()), t(e);
            }),
            $(window).on("resize", function () {
              a();
            });
        }
      }
    }
  
    function quickLinks() {
      function t(t, a) {
        t <= 570 || a <= 992
          ? $(".quickLinks-wrap").addClass("mobile")
          : $(".quickLinks-wrap").removeClass("mobile");
      }
      var a, i;
      $(window).on("load resize", function () {
        (a = $(this).height()), (i = $(this).width()), t(a, i);
      });
    }


  
    function quickLinkTab() {
     
      var t = $(window).height(),
        a = $(window).width();
      (t > 570 || a > 992) &&
        $(".quickLinks-item").each(function (t) {
          var a = $(this),
            i = ($(".quickLinks-item"), a.attr("data-for-quick")),
            e = a.position().top;
          a.closest(".quickLinks-wrap")
            .find("[data-to-quick = " + i + "]")
            .css({
              top: e + 25 + "px",
            });


        }),
        $(".quickLinks-item").on("mouseover", function () {

          var t = $(window).height(),
            a = $(window).width(),
            i = $(this);
          $(".quickLinks-item");
          if (t > 570 || a > 992) {
            var e = i.attr("data-for-quick"),
              o = i.position().top;
            $("[data-to-quick]").removeClass("hover");
            i.closest(".quickLinks-wrap")
              .find("[data-to-quick = " + e + "]")
              .addClass("hover")
              .css({
                top: o + "px",
              });
          }


        }),
        $(".quickLinks-wrap").on("mouseleave", function () {
          var t = $(this),
            a = ($(".quickLinks-item"), t.attr("data-for-quick")),
            i = t.position().top;
            
          $("[data-to-quick]").removeClass("hover"),
            t
              .closest(".quickLinks-wrap")
              .find("[data-to-quick = " + a + "]")
              .removeClass("hover")
              .css({
                top: i + 25 + "px",
              });
        }),
        $(".quickLinks-item").on("click", function () {
          var t = $(window).height(),
            a = $(window).width(),
            i = $(this),
            e = $(".quickLinks-item");

          if (t <= 570 || a <= 992)
            if (i.hasClass("active"))
              i.removeClass("active"), $("[data-to-quick]").slideUp();
            else {
              e.removeClass("active"), i.addClass("active");
              var o = i.attr("data-for-quick");
              $("[data-to-quick]").slideUp(),
                i
                  .closest(".quickLinks-wrap")
                  .find("[data-to-quick = " + o + "]")
                  .slideDown();
            }

        });

        // $(".quickLinks-desc.hover").on("click", function () {

        // });
 
      
    }
   

    function inputMask() {
      $('input[type="tel"]').mask(""),
        $(".datetimepicker").length &&
          $(".datetimepicker").datetimepicker({
            format: "DD/MM/YYYY",
            ignoreReadonly: !0,
            icons: {
              time: "far fa-clock",
              date: "far fa-calendar-alt",
              up: "fas fa-angle-up",
              down: "fas fa-angle-down",
              previous: "fas fa-angle-left",
              next: "fas fa-angle-right",
              today: "far fa-calendar-alt",
              clear: "fas fa-times",
              close: "fas fa-times",
            },
          }),
        $(".timepicker").length &&
          $(".timepicker").datetimepicker({
            format: "LT",
            ignoreReadonly: !0,
            icons: {
              time: "far fa-clock",
              up: "fas fa-angle-up",
              down: "fas fa-angle-down",
              previous: "fas fa-angle-left",
              next: "fas fa-angle-right",
            },
          });
    }
  
    function sliderInit() {
      $(".blog-post-slider").length > 0 &&
        $(".blog-post-slider").each(function () {
          var t = 1 * $(this).attr("data-show-count"),
            a = 1 * $(this).attr("data-show-count-md"),
            i = 1 * $(this).attr("data-show-count-mob"),
            e = $.parseJSON($(this).attr("data-slick-arrow")),
            o = 1 * $(this).attr("data-slick-speed"),
            s = $.parseJSON($(this).attr("data-slick-autoplay"));
          $(this).slick({
            arrows: e,
            infinite: !1,
            adaptiveHeight: !0,
            slidesToShow: t,
            autoplay: s,
            autoplaySpeed: o,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: a,
                },
              },
              {
                breakpoint: 705,
                settings: {
                  slidesToShow: i,
                },
              },
            ],
          });
        }),
        setSlickArrow();

    }
  
    function mobileSlider() {
      if ($(".mobile-slider").length > 0) {
        var t;
        $(window).on("load resize", function () {
          (t = $(this).width()),
            $(".mobile-slider:not(.slick-initialized)").each(function () {
              var a = $(this),
                i = a.attr("data-init-resolution");
              t <= i &&
                a.slick({
                  arrows: !1,
                  dots: !1,
                });
            });
        });
      }
    }
  
    function setSlickArrow() {
      $(".slick-prev").html('<i class="fas fa-angle-left"></i>'),
        $(".slick-next").html('<i class="fas fa-angle-right"></i>');
    }
  
    window.initMap = function () {
      function t(t) {
        var a, i, e, o, s, n;
        (a = document.getElementById(t)),
          (o = parseFloat(a.getAttribute("data-lat"), 10)),
          (s = parseFloat(a.getAttribute("data-lng"), 10)),
          (e = parseFloat(a.getAttribute("data-zoom"), 10)),
          (n = a.getAttribute("data-map-icon"));
        var r = {
          zoom: e,
          center: {
            lat: o,
            lng: s,
          },
          styles: [
            {
              featureType: "administrative",
              elementType: "labels.text",
              stylers: [
                {
                  visibility: "on",
                },
              ],
            },
            {
              featureType: "poi",
              elementType: "all",
              stylers: [
                {
                  visibility: "off",
                },
              ],
            },
            {
              featureType: "transit.station.rail",
              elementType: "all",
              stylers: [
                {
                  visibility: "simplified",
                },
                {
                  saturation: "-100",
                },
              ],
            },
            {
              featureType: "water",
              elementType: "all",
              stylers: [
                {
                  visibility: "on",
                },
              ],
            },
          ],
        };
        i = new google.maps.Map(a, r);
        for (
          var l = [
              {
                coordinates: {
                  lat: o,
                  lng: s,
                },
                myMap: i,
                iconImg: n,
              },
            ],
            d = 0;
          d < l.length;
          d++
        )
          !(function (t) {
            new google.maps.Marker({
              position: t.coordinates,
              map: t.myMap,
              icon: t.iconImg,
            });
          })(l[d]);
      }
      $(".map-block").length > 0 &&
        $(".map-block").each(function () {
          t($(this).attr("id"));
        });
    };
  
    function initLightbox() {
      $(document).on("click", '[data-toggle="lightbox"]', function (t) {
        t.preventDefault(), $(this).ekkoLightbox({});
      }),
        $(document).on("click", "[data-gallery]", function (t) {
          t.preventDefault(), $(this).ekkoLightbox({});
        });
    }
  
    function viewMore() {
      $("[data-view-more]").on("click", function (t) {
        t.preventDefault();
        var a = $(this),
          i = a.attr("data-view-more");
        $(i).show(), a.hide();
      });
    }
  
    function centreTabs() {
      $("[data-tab-group]").length > 0 &&
        $("[data-tab-group]").each(function () {
          function t(t) {
            r.removeClass(l), r.eq(t).addClass(l);
          }
          var a = $(this),
            i = a.find("[data-tab-head]"),
            e = i.find("a"),
            o = i.find(".active"),
            s = e.index(o),
            n = a.find("[data-tab-content]"),
            r = n.find(".tab-content"),
            l = "active";
          t(s),
            e.on("click", function (a) {
              a.preventDefault(),
                e.removeClass("active"),
                $(this).addClass("active"),
                (o = i.find(".active")),
                (s = e.index(o)),
                t(s);
            });
        });
    }
  
    function accordion() {
      $("[data-accordion-colection]").length > 0 &&
        $("[data-accordion-colection]").each(function () {
          function t(t) {
            s.slideUp(), t.find(".accordion-content").slideDown();
          }
          var a = $(this),
            i = a.find(".accordion-block"),
            e = a.find(".accordion-header"),
            o = a.find(".active"),
            s = a.find(".accordion-content");
          t(o),
            e.on("click", function () {
              if ($(this).closest(i).hasClass("active"))
                return $(this).closest(i).removeClass("active"), void s.slideUp();
              i.removeClass("active"),
                $(this).closest(i).addClass("active"),
                (o = a.find(".active")),
                t(o);
            });
        });
    }
  
    function mansoryInit() {
      $(".grid").imagesLoaded(function () {
        $(".grid").isotope({
          itemSelector: ".grid-item",
          columnWidth: ".grid-item",
          isAnimated: !0,
        });
      });
    }
  
    function gridFilter() {
      $(".grid-filter a").on("click", function (t) {
        t.preventDefault();
        var a = $(this).attr("data-filter"),
          i = $(this).closest(".grid-wrap").find(".grid");
        i.find(".grid-item");
        $(".grid-filter a").removeClass("active"),
          $(this).addClass("active"),
          $(".grid").isotope({
            filter: a,
          });
      });
    }
  
    function drawCircleMy() {
      $(".learning-elements-wrap").length > 0 &&
        $(".learning-elements-wrap").each(function () {
          var t = $(this).width();
          $(this).css("height", t), updateLayout(t);
        });
    }
  
    function headSearch() {
      $(".header-search").on("click", function () {
        $(this).find(".search-form").addClass("active");
      }),
        $(document).on("mouseup", function (t) {
          var a = $(".header-search .search-form");
          !a.is(t.target) &&
            0 === a.has(t.target).length &&
            a.hasClass("active") &&
            $(".header-search .search-form").removeClass("active");
        });
    }
  
    function mainScrollAnimate() {
      $(window).scrollTop(), $(window).height();
      $(".on-scroll").length > 0 &&
        $(window).on("scroll load", function () {
          var t = $(window).scrollTop(),
            a = $(window).height();
          $(".on-scroll").each(function () {
            var i = $(this),
              e = i.attr("data-scroll-offset"),
              o = $(this).offset().top;
            t > o - a * (void 0 !== e ? e : 0.95) && i.addClass("show-scroll");
          });
        });
    }
  
    function addDelay() {
      var t,
        a,
        i,
        e,
        o = $("[data-delay]");
      o.each(function (o, s) {
        (e = 0),
          (a = $(this)),
          (t = a.attr("data-delay")),
          (i = a.find(t).length);
        for (var o = e; o <= i; o++)
          a.find(t)
            .eq(o)
            .css({
              "transition-delay": 0.2 * o + "s",
            });
      });
    }
  
    function myParoller() {
      $(".my-paroller").paroller();
    }
  
    function toTop() {
      if ($(".up-btn").length > 0) {
        var t;
        $(window).on("scroll", function () {
          (t = $(window).scrollTop()),
            t > 101
              ? $(".up-btn").addClass("show-up")
              : $(".up-btn").removeClass("show-up");
        }),
          $(".up-btn").on("click", function () {
            $("html, body").animate(
              {
                scrollTop: 0,
              },
              600
            );
          });
      }
    }
  
    function cutWords() {
      var t;
      $(window).on("load resize", function () {
        (t = $(this).width()) < 481 &&
          $(".for-tab p").each(function () {
            var t = $(this),
              a = t.text();
            a.length > 120 && t.text(a.slice(0, 120) + " ...");
          });
      });
    }
  
    function initEvents() {
          lazyLoader(),
          mobileMenu(),
          mobileNav(),
          firstLettet(),
          stickyHeder(),
          mobileHeader(),
          quickLinks(),
          viewMore(),
          quickLinkTab(),
          inputMask(),
          sliderInit(),
          mobileSlider(),
          initLightbox(),
          centreTabs(),
          accordion(),
          mansoryInit(),
          gridFilter(),
          drawCircleMy(),
          headSearch(),
          mainScrollAnimate(),
          myParoller(),
          toTop(),
          cutWords();
        $(window).on("load", function () {
          $(".preloader").length > 0 && $(".preloader").fadeOut();
        }),
        $(window).on("resize", function () {
          setTimeout(setSlickArrow, 400), setTimeout(drawCircleMy, 400);
        });
    }
    var updateLayout = function (t) {
      var a = $(".learning-elements-wrap .learning-item");
      if ($(window).width() > 991)
        for (var i = 0; i < a.length; i++) {
          var e = 360 / a.length,
            o = e * i;
          $(a[i]).css(
            "transform",
            "rotate(" +
              o +
              "deg) translate(0, -" +
              (t / 2 - 40) +
              "px) rotate(-" +
              o +
              "deg)"
          );
        }
      else
        for (var i = 0; i < a.length; i++) {
          var e = 360 / a.length,
            o = e * i;
          $(a[i]).css(
            "transform",
            "rotate(" +
              o +
              "deg) translate(0, -" +
              (t / 2 - 15) +
              "px) rotate(-" +
              o +
              "deg)"
          );
        }
    };
    initEvents();

    
  })(window.jQuery);
  