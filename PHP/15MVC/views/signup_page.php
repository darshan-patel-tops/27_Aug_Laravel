<!---->
<style>
    

.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	width:330px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
</style>
<!--content-->
<div class="content-top ">
    <div class="container ">
    <div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Registration</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form method="post">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<label for="username">User Name</label>
					<input type="text" placeholder="Enter User Name" class="form-control form-control-sm" name="username" id="username" title="tops?123">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="username">First Name</label>
							<input type="text" placeholder="Enter First Name" class="form-control form-control-sm" name="fname" id="fname">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="username">Last Name</label>
							<input type="text" placeholder="Enter Last Name" class="form-control form-control-sm" name="lname" id="lname" >
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" onkeyup="checkemail(this,'emailError')" placeholder="xxxxx@xxx.xxxx" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
					<span id="emailError"></span>
				</div>
				<script>
					function checkemail(e,sp) {
						// console.log(e.value);
						$.ajax({
							type:"post",
							data:{"email":e.value},
							url:"http://localhost/laravel/27AugLaravelTTS10_30/27AugLaravelTTS10_30/PHP/API/emailalreadyexist",
							success:function (response){
								// console.log(response);
								ObjectData = JSON.parse(response)
								// console.log(ObjectData.Code);
								if (ObjectData.Code == 0) {
									// console.log("inside if");
									// document.getElementById(sp).innerHTML="valid"
									$("#"+sp).html("Valid")
									// $("#sp").html("Valid")
								} else {
									document.getElementById(sp).innerHTML="invalid"
									// console.log("inside else");
									$("#"+sp).html("already exsist")
								}
							}
						})
					}
				</script>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
				</div>
				<div class="form-group">
					<label for="exampleInputMobile">Mobile</label>
					<input type="tel" name="Mobile" class="form-control form-control-sm" id="exampleInputMobile">
				</div>
				<div class="form-group">
					<label for="exampleInputGender">Gender</label>
					<input type="radio" name="gender" value="Male" id="Male"><label for="Male">Male</label>
					<input type="radio" name="gender" value="Male" id="Female"> <label for="Female">Female</label>
				</div>
				<div class="form-group">
					<label for="exampleInput">Hoobies</label>
					<input type="checkbox" name="chk[]" id="Cricket" value="Cricket"><label for="Cricket">Cricket</label>
					<input type="checkbox" name="chk[]" id="Music" value="Music"><label for="Music">Music</label>
					<input type="checkbox" name="chk[]" id="Reading" value="Reading"><label for="Reading">Reading</label>
					<input type="checkbox" name="chk[]" id="Cooking" value="Cooking"><label for="Cooking">Cooking</label>
				</div>
				<div class="form-group">
					<label for="exampleInput">City</label>
					<select  class="form-control form-control-sm"  name="city" id="city">
						<option value="">Select City</option>
						<option value="1">Ahemedabad</option>
						<option value="2">Baroda</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInput">Address</label>
					<textarea name="address" id="address" rows="3" class="form-control"></textarea>	
				</div>
				<button type="submit" name="btn-regist" class="btn btn-primary btn-block">Sign in</button>
			</form>
		</div>
	</div>
</div>
</div>
     
    </div>
</div>
</div>
