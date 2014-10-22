(function($) {

    $(document).ready(function() {

		//Back to Top
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
        
        //Removing understores from PDF links
        //var thislink = $('a[@href$=".pdf"]').text();
        //$('a[@href$=".pdf"]').text('pdfClass');
		//str.replace('.pdf', '').replace(/[_\s]/g, '-')
		
        //Wrapping all h2's with a div to add 
        $('#content h2').wrap('<div class="h2header" />');

        //We call this Sarah's fix
        // Add pdf icons to pdf links that aren't contained in the span class=file
        $("a[href$='.pdf']:not(span a)").prepend('<img class="file-icon" alt="PDF Document" title="application/pdf" src="/modules/file/icons/application-pdf.png"> ');

        // Add txt icons to document links (doc, rtf, txt)
        //$("a[href$='.doc'], a[href$='.txt'], a[href$='.rft']").prepend('<img class="file-icon" alt="" title="application/pdf" src="/modules/file/icons/x-office-document.png"> ');

        //Replace 4th span on homepage with twitter feed
        $('#views-bootstrap-grid-2 .span3:nth-child(4)').empty().append('<a class="twitter-timeline" href="https://twitter.com/TNRegents" data-widget-id="519915935860158464">Tweets by @TNRegents</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>');

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

		//Webkit speech to text. Deprecated so remove next version.
        $('input[type=text]').attr('x-webkit-speech', 'x-webkit-speech');

        // Add section-home class to the first li element in the sidebar     
        $("#sidebar-first ul.menu li.first:first").addClass('section-home');
        
        //Add the twitter home button to the li with section-home class     
        //$("li.section-home a").prepend('<i class="icon-home">');


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

        // If this is a policy, then replace the word "Exhibit" within the policy content with a link to the exhibit area
        if ($(".policy-content").length) {
            var thePage = $(".policy-content");
            thePage.html(thePage.html().replace(/exhibit/ig, '<a href="#exhibits">Exhibit</a>'));
        }

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


    /*
	// Menu Stuff
	
	
	// Count the number of links on the page in the left-hand nav.
 // var linkCount = $('#block-menu-block-2 li').length;
 
//  if (linkCount > 2) { // If greater than 15...
    //alert('There are '+linkCount+' links in the left-hand nav.');

    // Set expanded items to collapsed by default.

    $("#block-menu-block-2 ul.menu li.expanded:not('.active-trail') > a").next("ul").css("display", "none");
    $("#block-menu-block-2 ul.menu li.expanded:not('.active-trail')").addClass("collapsed").removeClass("expanded");

    // Toggle the expanded/collapsed state of the list item.

    $("#block-menu-block-2 ul.menu li.collapsed > a").click(function() {
      // Mark the parent list item as expanded.
      $(this).parent().toggleClass('collapsed').toggleClass('expanded');
      $(this).next("ul").slideToggle('fast');
      // Also make any previously expanded list items collapse at this point.
      $(this).parent().siblings("[class*=expanded]").each(function (i) {
        $(this).toggleClass('collapsed').toggleClass('expanded'); // Change the class on the <li>.
        $(this).children("ul").slideToggle('fast'); // Make the child <ul> slide up.
      });
      return false;
    });
    $("#block-menu-block-2 ul.menu li.expanded > a").click(function() {
      // Mark the parent list item as collapsed.
      $(this).parent().toggleClass('collapsed').toggleClass('expanded');
      $(this).next("ul").slideToggle('fast');
      // Also need to run the following again because active-trail links seem to continue to be found by this function, even after their class changes to "collapsed".
      $(this).parent().siblings("[class*=expanded]").each(function (i) {
        $(this).toggleClass('collapsed').toggleClass('expanded'); // Change the class on the <li>.
        $(this).children("ul").slideToggle('fast'); // Make the child <ul> slide up.
      });
      return false;
    });
  //}
*/

})(jQuery);