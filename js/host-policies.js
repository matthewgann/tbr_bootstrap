(function($) {

    $(document).ready(function() {
    
    	//Changing the headers in the policy/guideline content type to make the lawyers happy.
		var pathname = window.location.pathname;
		var policyarea = pathname.split('/');
		switch (policyarea[1]) { 
	    	case "guidelines":
	        	$('h2.policy-guideline-area-header').text('Guideline Area');
	        	$('h2.policy-guideline-content-header').text('Guideline');
	        	
	        break;
	        
	        case "policies":
	        	$('h2.policy-guideline-area-header').text('Policy Area');
	        	$('h2.policy-guideline-content-header').text('Policy');
	        break;
		}	
	
    });


})(jQuery);