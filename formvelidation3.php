<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		span{
			color: red;
			font-size: 16px;
			font-family: verdana;
		}
	</style>
	<script type="text/javascript">
		function valid()
		{
		var name=document.getElementById("name").value;
		var password=document.getElementById("password").value;
		var compass=document.getElementById("compass").value;
		var dob=document.getElementById("dob").value;
		var address=document.getElementById("address").value;
		var mobile=document.getElementById("mobile").value;
		var email=document.getElementById("email").value;
		var pin=document.getElementById("pin").value;

		var exp_name=/^[a-z0-9]{3,15}$/;
			var passwordche=/^[0-9a-z@#%$&*]{6,8}$/;
			var dobche=   /^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/;
			var add=/^[a-z0-9]{6,100}$/;
			var numberche=/^[+0-9]{1,3}?[0-9]{10,11}$/;
			var emailche=/^[a-z0-9]{3,}@[a-z]{3,}[.]{1}[a-z.]{2,6}$/;
			var pincode=/^[0-9]{6}$/;

			if (exp_name.test(name)) {
				document.getElementById("nameerror").innerHTML = " ";
			}
			else{
				document.getElementById("nameerror").innerHTML = " * name is invalid ";	
				return false;
			}

			if (passwordche.test(password)) {
				document.getElementById("passworderror").innerHTML = " ";
			}
			else{
				document.getElementById("passworderror").innerHTML = " * password is invalid ";
				return false;
			} 
			if (password.match(compass)) {
					document.getElementById("compasserror").innerHTML = " ";
			}
			else{
				document.getElementById("compasserror").innerHTML = " * password don't match ";
				return false;
			}

			if (dobche.test(dob)) {
				document.getElementById("doberror").innerHTML = " ";
			}
			else{
				document.getElementById("doberror").innerHTML = " * enter valid date of birth ";
				return false;
			}
			if (add.test(address)) {
				document.getElementById("addresserror").innerHTML = " ";
			}
			else{
				document.getElementById("addresserror").innerHTML = " * address is invalid ";
				return false;
			}

			if (numberche.test(mobile)) {
				document.getElementById("mobileerror").innerHTML = " ";
			}
			else{
				document.getElementById("mobileerror").innerHTML = " * mobile is invalid ";
				return false;
			}

			if (emailche.test(email)) {
				document.getElementById("emailerror").innerHTML = " ";
			}
			else{
				document.getElementById("emailerror").innerHTML = " * email is invalid ";
				return false;
			}
			if (pincode.test(pin)) {
				document.getElementById("pinerror").innerHTML = " ";
			}
			else{
				document.getElementById("pinerror").innerHTML = " * pincode is invalid ";
				return false;
			}
		
      }
	</script>
</head>
<body>
 <div class="contanner">
 
 	<form name=""  onsubmit="return valid()" method="post">
	<table border="1" align="center">
		<tr>
		<td>NAME</td>
		<td><input type="text" name="" id="name">
		<span id="nameerror"></span></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="password" name="" id="password">
		<span id="passworderror"></span></td>
	</tr>
	<tr>
		<td>COMFIRM password</td>
		<td><input type="password" name="" id="compass">
		<span id="compasserror"></span></td>
	</tr>
	<tr>
		<td>DATE OF BIRTH</td>
		<td><input type="text" name="" id="dob">
		<span id="doberror"></span></td>
	</tr>
	<tr>
		<td>ADDRESS</td>
		<td><input type="text" name="" id="address">
		<span id="addresserror"></span></td>
	</tr>

	<tr>
		<td>MOBILE</td>
		<td><input type="text" name="" id="mobile">
		<span id="mobileerror"></span></td>
	</tr>
	<tr>
		<td>EMAIL</td>
		<td><input type="text" name="" id="email">
		<span id="emailerror"></span></td>
	</tr>
	<tr>
		<td>PINCODE</td>
		<td><input type="text" name="" id="pin">
		<span id="pinerror"></span></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="btn" value="Rgistation"></td>
	</tr>
	</table>
</form>

 </div>
</body>
</html>