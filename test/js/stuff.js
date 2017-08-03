               // Mouse Movement
                $.fn.parallax = function (resistance, mouse) {
                    $el = $(this);
                    TweenLite.to($el, 0.2, {
                        x: -((mouse.clientX - (window.innerWidth / 2)) / resistance),
                        y: -((mouse.clientY - (window.innerHeight / 2)) / resistance)
                    });

                };

                // Background and Clouds 
                $(document).mousemove(function (e) {
                    $('.layer1').parallax(10, e);
                    $('.layer2').parallax(20, e);
                    $('.layer3').parallax(30, e);
                });

                // Hidden Header
                (function ($) {
                    $(document).ready(function () {
                        $(window).scroll(function () {
                            if ($(this).scrollTop() > 30) {
                                $('#hiddenheader').fadeIn(500);
                            } else {
                                $('#hiddenheader').fadeOut(500);
                            }
                        });
                    });
                })(jQuery);

                // Change Nav links on Scroll
                var sections = $('section'),
                    nav = $('nav'),
                    nav_height = nav.outerHeight();

                $(window).on('scroll', function () {
                    var cur_pos = $(this).scrollTop();

                    sections.each(function () {
                        var top = $(this).offset().top - nav_height,
                            bottom = top + $(this).outerHeight();

                        if (cur_pos >= top && cur_pos <= bottom) {
                            nav.find('a').removeClass('active');
                            sections.removeClass('active');

                            $(this).addClass('active');
                            nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                        }
                    });
                });

                nav.find('a').on('click', function () {
                    var $el = $(this),
                        id = $el.attr('href');

                    $('html, body').animate({
                        scrollTop: $(id).offset().top
                    }, 500);

                    return false;
                });

                // Change Text in Introduction
                (function () {

                    var togText = $(".tog");
                    var togTextIndex = -1;

                    function showNextText() {
                        ++togTextIndex;
                        togText.eq(togTextIndex % togText.length)
                            .fadeIn(2000)
                            .delay(2000)
                            .fadeOut(2000, showNextText);
                    }
                    showNextText();
                })();
                //Slide Images as you Scroll
                $(window).fadeThis();