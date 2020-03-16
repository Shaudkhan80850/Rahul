<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function valid() 
		{
			var exp_name=/^[a-z0-9]{3,15}$/;
			var passwordche=/^[0-9a-z@#%$&*]{6,8}$/;
			var dobche=   /^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/;
			var add=/^[a-z0-9]{6,100}$/;
			var numberche=/^[+0-9]{1,3}?[0-9]{10,11}$/;
			var emailche=/^[a-z0-9]{3,}@[a-z]{3,}[.]{1}[a-z.]{2,6}$/;
			var pincode=/^[0-9]{6}$/;
			var webche=/^[http://]+[www]?.[0-9a-z.]+.[a-z.]{2,30}$/;
		
			var name=document.frm.name.value;
			var password=document.frm.password.value;
			var gen=document.frm.gender.value;
			var db=document.frm.dob.value;
			var dd=document.frm.address.value;
			var checkbox=document.getElementsByClassName("chk");
			var mobile=document.frm.mobile.value;
			var email=document.frm.email.value;
			var pi=document.frm.pin.value;
			var site=document.frm.web.value;
			
			

			if (!exp_name.test(name)) {
              alert("enter valid name");
              return false;
			}
			if (!passwordche.test(password)) {
                 alert("enter valid password");
                 return false;
			}
			if (gen=="") {
				alert("select gender");
				return false;
			}
			
			if (!dobche.test(db)) 
			{

				alert("enter valid date of birth");
				return false;
			}
			
			if (!add.test(dd)) 
			{

				alert("enter valid address");
				return false;
			}

			var ischk=false;
			for(var i=0;i<checkbox.length;i++)
			{
				if(checkbox[i].checked)
				{
					ischk=true;
				}
			}
			if(ischk==false)
			{
				alert("select any hobbies");
				return false;
			}

			if (!numberche.test(mobile)) 
			{

				alert("enter valid number");
				return false;
			}

			if (!emailche.test(email)) {
				alert("enter valid email");
				return false;
			}

			if (!pincode.test(pi)) 
			{

				alert("enter valid pincode");
				return false;
			}

			if (!webche.test(site)) 
			{

				alert("enter valid web site");
				return false;
			}
			
		}
	</script>
</head>
<body>
<form name="frm"  onsubmit="return valid()">
	<table border="1" align="center">
		<tr>
		<td>NAME</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>GENDER</td>
		<td>
		<input type="radio" value="male" name="gender">male
		<input type="radio" value="female" name="gender">female
	</td>
	</tr>
	<tr>
		<td>DATE OF BIRTH</td>
		<td><input type="text" name="dob"></td>
	</tr>
	<tr>
		<td>ADDRESS</td>
		<td><input type="text" name="address"></td>
	</tr>
	<tr>
		<td>HOBBIES</td>
		<td><input type="checkbox" name="hobby[]" value="Singing" class="chk">Singing
			<input type="checkbox" name="hobby[]" value="Dancing" class="chk">Dancing
			<input type="checkbox" name="hobby[]" value="Others" class="chk">Others
		</td>
	</tr>
	<tr>
		<td>MOBILE</td>
		<td><input type="text" name="mobile"></td>
	</tr>
	<tr>
		<td>EMAIL</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>PINCODE</td>
		<td><input type="text" name="pin"></td>
	</tr>
	<tr>
		<td>WEB SITE</td>
		<td><input type="url" name="web"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="btn" value="Rgistation"></td>
	</tr>
	</table>
</form>
</body>
</html>