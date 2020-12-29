
$(document).on('click','#submit',function(e) {

  	debugger;
	var username = $("input#login").val();
	var password = $("input#password").val();

	$.ajax
	({
	    type: "GET",
	    url: "./api/login_page.php",
	    dataType: 'json',
	    async: false,
	    data: '{"username": "' + username + '", "password" : "' + password + '"}',
	    success: function (res){
	    	if(res == true){
	    		alert("Success");
	    	}else{
	    		alert("Failed");
	    	}
	    }
	});

});
