(function($) {

    $(document).ready(function() {

        //Back to Top function (may depreciate)
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $("#toTop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });

        //Wrapping all h2's with a div to add
        $('#content h2').wrap('<div class="h2header" />');

        // Add section-home class to the first li element in the sidebar
        $("#sidebar-first ul.menu li.first:first").addClass('section-home');

        //Replace 4th span on homepage with twitter feed
        $('#views-bootstrap-grid-6 .span3:nth-child(4)').empty().append('<a class="twitter-timeline" href="https://twitter.com/TNRegents" data-widget-id="519915935860158464">Tweets by @TNRegents</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>');


        //Temporary fix to the multiple submission issue on Fraud abuse form.
        //Needs to be replaced with a form.hook solution on submission. Submit action->jquery click("disable").
        $("<p>Please only click 'Submit' once. The form submission process takes a moment to complete.<br>You will be taken to a confirmation page when the process has completed.</p>").insertBefore("input.webform-submit");

        //We call this Sarah's fix
        // Add pdf icons to pdf links that aren't contained in the span class=file
        $("a[href$='.pdf']:not(span a)").prepend('<img class="file-icon" alt="PDF Document" title="application/pdf" src="/modules/file/icons/application-pdf.png"> ');


        //Search functionality
        $("#do-site-search").click(function(e) {
            e.preventDefault();
            var globalsearchterm = $('.global-search-left input[type=text]').val();
            var halla = $("#global-search input:radio:checked").val();
            //var action = '/search/google/site%3Aemergingtech.tbr.edu%20' + globalsearchterm;
            //var action = '/search/google/site.emergingtech.tbr.edu' + ' ' + globalsearchterm;
            var action = '/search/google/' + halla + ' ' + globalsearchterm;
            window.location.href = action;
        });

        $("#edit-keys").removeAttr('style');

        $(".dropdown-menu li.column-menu ul").addClass('dropdown-menu-nogo');

        //Adding the search icon on a views widget that just has title searches.
        //Probably a better way to do this. Someday.
        $(".views-widget-filter-title input.form-text").wrap("<div class='input-prepend'></div>");
        $(".views-widget-filter-title .input-prepend").prepend("<span class='add-on'><i class='icon-search'></i></span>");

        //Search animation function for the top header.
        $('#global-search').animate({
            marginTop: '-50px'
        }, 0);
        $('#show-search').toggle(
            function() {
                $('#global-search').animate({
                    marginTop: '0'
                }, 500);
                $('.global-search-left input').focus();
            },
            function() {
                $('#global-search').animate({
                    marginTop: '-50px'
                }, 500);
            });

        $('.double-scroll').doubleScroll();

        //Add  tooltip to images with data-toggle=tooltip
        $("img[data-toggle=tooltip]").tooltip({
            offset: 10
        })

        //Sticky Footer
        function positionFooter() {
            var Footer = $("#footer");
            if ((($(document.body).height() + Footer.height()) < $(window).height() && Footer.css("position") == "fixed") || ($(document.body).height() < $(window).height() && Footer.css("position") != "fixed")) {
                Footer.css({
                    position: "fixed",
                    bottom: "120px"
                });
            } else {
                Footer.css({
                    position: "static"
                });
            }
        }

        // Sticky Global Footer
        function positionGlobalfooter() {
            var Globalfooter = $("#global-footer");
            if ((($(document.body).height() + Globalfooter.height()) < $(window).height() && Globalfooter.css("position") == "fixed") || ($(document.body).height() < $(window).height() && Globalfooter.css("position") != "fixed")) {
                Globalfooter.css({
                    position: "fixed",
                    bottom: "0px"
                });
            } else {
                Globalfooter.css({
                    position: "static"
                });
            }
        }

        positionFooter();
        $(window).scroll(positionFooter);
        $(window).resize(positionFooter);
        $(window).load(positionFooter);
        positionGlobalfooter();
        $(window).scroll(positionGlobalfooter);
        $(window).resize(positionGlobalfooter);
        $(window).load(positionGlobalfooter);

    });

})(jQuery);