<script type="text/javascript" src="jquery.min.js"></script>
<script>

$(document).ready(function(){
	$("#submita").click(function(e){
		e.preventDefault();
			var user = $("#user").val();
			var pass = $("#pass").val();
			var email = $("#email").val();
			var cate = $(".cate:checked").val();
			if(user == "")
			{
				$('.user_error').text("Enter user name");
				$('#user').css({"border":"1px solid red"});
			}else
			{
				$('.user_error').text('');
				$('#user').css({"border":"1px solid #ccc"});
			}

			if(pass == "")
			{
				$('.pass_error').text("Enter Password");
				$('#pass').css({"border":"1px solid red"});
				
			}else
			{
				$('.pass_error').text('');
				$('#pass').css({"border":"1px solid #ccc"});
			}
			if(email == "")
			{
				$('.email_error').text("Enter Email");
				$('#email').css({"border":"1px solid red"});
			}else{
				$('.email_error').text('');
				$('#email').css({"border":"1px solid #ccc"});
			}

			if(cate == undefined)
			{
				$('.cate_error').text("Select atleast one category");
				$('.cate').css({"border":"1px solid red"});
			}else{
				$('.cate_error').text('');
				$('#cate').css({"border":"1px solid #ccc"});
			}

			if(user != "" && pass != "" && email != "" && cate != undefined)
			{
				$('#form1').submit();
			}
	});
});
</script>

<form action="form_submit.php" method="post" id="form1">
	<fieldset>
		<legend>personl information</legend>
			User name:<br>
				<input type="text" name="username" placeholder="Enter user name" id="user" >
				<span class="user_error" style="color:red;"></span><br>

			User password:<br>
				<input type="password" name="psw" placeholder="password" id="pass">
				<span class="pass_error" style="color:red;"></span><br>

			Email:<br>
				<input type="email" name="email" placeholder="Enter Email" id="email">
				<span class="email_error" style="color:red;"></span><br>


			Gender:<br>
				<input type="radio" name="sex" value="male" class="gender" checked> male
				<input type="radio" name="sex" value="female" class="gender"> female<br>

			Category:<br>
				<input type="checkbox" name="category" value="g" class="cate" >General
				<input type="checkbox" name="category" value="obc" class="cate" >OBC
				<input type="checkbox" name="category" value="sc" class="cate">SC
				<span class="cate_error" style="color:red;"></span><br>

			Addresss:<br>
				<textarea name="message" rows="10" cols="100" placeholder="Enter Locality"></textarea><br>

				<input type="button" value="Submit" name="submita" id="submita">
	</fieldset>
</form>




