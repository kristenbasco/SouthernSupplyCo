jQuery(document).ready(function(){


	// On Search Submit and Get Results
	function search() {
	    var query_value = $('input#search').val();
	    $('#search-string').html(query_value);
	    if(query_value !== ''){
	        $.ajax({
	            type: "POST",
	            url: "includes/a4_search.php",
	            data: { query: query_value },
	            cache: false,
	            success: function(html){
	                $("ul#results").html(html);
	            }
	        });
	    }return false;
	}


	$("input#search").live("keyup", function(e) {
		console.log('keyup');
	    // Set Timeout
	    clearTimeout($.data(this, 'timer'));

	    // Set Search String
	    var search_string = $(this).val();

	    // Do Search
	    if (search_string == '') {
	        $("ul#results").fadeOut();
	        $('h4#results-text').fadeOut();
	    }else{
	        $('h4#results-text').fadeIn();
	        $(this).data('timer', setTimeout(search, 100));
	        $("ul#results").fadeIn();

	    };
	});





	
});