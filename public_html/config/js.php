<!-- FontAwesome -->
<script src="https://use.fontawesome.com/57ed1d5f9d.js"></script>

<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript" src="config/ckeditor/ckeditor.js"></script>


<script>
  //image upload
   function chooseImg() {
      $("#imgUp").click();
   }

   $(function(){
    	$("#imgUp").change(function(){
        	$("#fileUp").submit();
    	});
	});
	//end


	//one will hide if another opens (message and notification box)
	function showHideDiv(show, hide) {
		if($('#'+show).is(':visible')) {
			$("#"+show).hide();
		}else{
			$("#"+show).show();
			$("#"+hide).hide();
		}
    }
    //ends


		function replybtn(id){ //reply icon
			$("#rb"+id+" .rotate").toggleClass("down")  ;
		}


   //close the open boxes(notification or message) when click out side it
    $(document).mouseup(function (e){

    	var container = $("#notifi");

    	if($('#msg').is(':visible')) {
    		container = $("#msg");
    	}

		if (!container.is(e.target) && container.has(e.target).length === 0){
        	container.hide();
    	}
	});
	//ends



	$(document).ready(function () {


		$("form").submit(function(e) {  //privent blank post submission
				var description = CKEDITOR.instances['comment'].getData().replace(/<[^>]*>/gi, '').length;
				var inp = $("#usr");

				if (!description || inp.val().length == 0) {
        	alert("Post or Title can not be empty");
        	return false;
    		}
		});


	});


//comment/ answer posting ajax
function comment(course){
	var content = CKEDITOR.instances.comment.getData();
	if (content.length > 0){
		 $.post('config/post-ajax.php', "comment="+content+"&course="+course);
		 location.reload();
	}
}//comment/ answer posting ajax

//reply posting ajax
function reply(comment){
	var content = $("#re"+comment).val();
	var time = new Date();

	if (content.length > 0){

		 $.post('config/post-ajax.php', "reply="+content+"&comment="+comment+"&time="+time).success(function(data) {
			 	$("#reply"+comment).append(data);
 	                   });

	}
}// reply posting ajax



</script>
