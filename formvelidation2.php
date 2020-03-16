<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function valid() 
		{
			var new_name="";
			var new_gender="";
			var new_dob="";
			var new_address="";
			var new_hobbies="";

			var exp_name=/^[a-z0-9]{3,8}$/;
			var exp_dob=  /^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/;
			var exp_address=/^[a-z0-9]{6,100}$/;

			var name=document.frm.name.value;
			var gen=document.frm.gender.value;
			var dob=document.frm.dob.value;
			var add=document.frm.address.value;

			var checkbox=document.getElementsByClassName("chk");

			if(!exp_name.test(name))
			{
				new_name="enter valid name";
			}
			if(gen=="")
			{
				new_gender="select gender";
			}
			if (!exp_dob.test(dob)) 
			{

				new_dob="enter valid date of birth";
			}
			if (!exp_address.test(add)) 
			{

				new_address="enter valid address";
			
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
				new_hobbies="select any hobbies";
		
			}

			if(new_name!="" || new_gender!="" || new_dob!="" || new_address!="" || new_hobbies!="")
			{
				alert(new_name+"\n"+new_gender+"\n"+new_dob+"\n"+new_address+"\n"+new_hobbies);
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
		<td colspan="2" align="center"><input type="submit" name="btn" value="Rgistation"></td>
	</tr>
	</table>
</form>

</body>
</html>