/*var erbg = document.getElementById('ebg');
var erdeg = document.getElementById('edeg');
var eruid = document.getElementById('euid');
var erimg = document.getElementById('eimg');
var s = name.split(' ');
var c = name.charAt(0);*/


function letterValid(name)
{
	var letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ','.','-','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	var	splitName = name.split('');
	var	flag = 0;
		for (var i = 0; i < splitName.length; i++) {
			for (var j = 0; j < letter.length; j++) {
				if (splitName[i] == letter[j]) {
					if((i==0) && (letter[j]==" "||letter[j]=="."||letter[j]=="-"))
					{
						flag=flag;
					}
					else
					{
						if(splitName[i]==" ")
						{
							if(splitName[i+1]==" "||splitName[i-1]==" "||splitName[i+1]=="."||splitName[i+1]=="-")
							{
								flag=flag;
							}
							else
								flag+=1;
						}
						else if(splitName[i]==".")
						{
							if(splitName[i+1]=="-"||splitName[i+1]==".")
							{
								flag=flag;
							}
							else
								flag+=1;
						}
						else if(splitName[i]=="-")
						{
							if(splitName[i+1]=="-"||splitName[i+1]==".")
							{
								flag=flag;
							}
							else
								flag+=1;
						}
						else
							flag+=1;
					}
				}
				else
					flag=flag;
			}
		}
		if(flag==name.length)
		{
			var s = name.split(' ');
			if(s.length<2)
			{
				return false; 
			}
			else if(s.length>=2)
			{
				if(name.charAt(name.indexOf(' ')+1)=="")
				{
					return false; 
				}
				else
					return true;
			}
			else if(name.length==n)
			{
				return true;
			}
			else
				return false;
		}
		else
		{
			return false;
		}
}


function validateName() {
	var ername = document.getElementById('ename');
	var name = document.getElementById('1').value;
	
	if (name == "") 
	{
		ername.innerHTML = "Name can not be empty.";
	}
	else {
		if(letterValid(name))
		{
			ername.innerHTML = "";
		}
		else
		{
			ername.innerHTML = "Name can not Valid.";
		}
	}
	
}

function specialCharPresent(a,b)
{
	var c = a.indexOf(b);
	return c;
}


function Email(email)
{
	var c = specialCharPresent(email,'@');
	if(email.charAt(0)==" "||email.charAt(0)=="@")
	{
		return false;
	}
	else
	{
		if(c == -1)
		{
			return false;
		}
		else
		{
			var splitEmail_1 = email.split('@');
			var positionOfDot = specialCharPresent(splitEmail_1[1],'.');

			if(splitEmail_1[1].charAt(0)==" "||splitEmail_1[1].charAt(0)==".")
			{
				return false;
			}
			else
			{
				if(positionOfDot == -1)
				{
					return false;
				}
				else
				{
					var splitEmail_2 = splitEmail_1[1].split('.');
					if(splitEmail_2[1]!="com")
					{
						return false;
					}
					else
						return true;
				}
			}
		}
	}
}

function validateEmail(){
	var email = document.getElementById('2').value;
	var eremail = document.getElementById('eemail');

	if (email == "") {
		eremail.innerHTML = "Email can not be empty.";
	}
	else {
		if(Email(email))
		{
			eremail.innerHTML = "";
		}
		else
		{
			eremail.innerHTML = "Email can not Valid.";
		}
	}

}

function validateUname(){
	var uname = document.getElementById('3').value;
	var eruname = document.getElementById('euname');

	if (uname == "") {
		eruname.innerHTML = "Username can not be empty.";
	}
}



function validateGender()
{
	var gender = document.getElementsByName('gender');
	var flag = "";
	for (var i = 0; i < gender.length; i++) {
		if(gender[i].checked)
		{
			flag = gender[i].value;
			break;
		}
		else
		{
			flag = "Empty Value";
		}
	}
	return flag;
}

function DOB(day,month,year)
{
	var d = NumberValid(day);
	var m = NumberValid(month);
	var y = NumberValid(year);
	if(d == false || m == false || y == false)
	{
		return false;
	}
	else
	{
		if((Number(d) > 31 || Number(d) < 1) || (Number(m) > 12 || Number(m) < 1) || (Number(y) > 2016 || Number(y) < 1900))
			{
				return false;
			}
			else{
				return true;
			}
	}
}

function validateDob(){
	var date = document.getElementById('6').value;
	var month = document.getElementById('7').value;
	var year = document.getElementById('8').value;
	var erdob = document.getElementById('edob');

	if (date == "" || month == "" || year == "") {
		erdob.innerHTML = "Date of Birth can not be empty.";
	}
	else{
		if (DOB(date,month,year)) {
			erdob.innerHTML = "";
		}
		else{
			erdob.innerHTML = "Date is not valid";
		}
	}
}

function validateBloodGrp()
{
	var bloodGroup = document.getElementById('9').value;
	var erbg = document.getElementById('ebg');
	
		if(bloodGroup == "")
		{
			erbg.innerHTML = "Select Your Blood Group";
		}
		else{
			erbg.innerHTML = "";
		}
}

function validateDegree()
{
	var deg = document.getElementsByName('deg');
	
	var a = "";
	for(var i=0; i<deg.length; i++)
	{
		if(deg[i].type == "checkbox" && deg[i].checked == true)
			a += deg[i].value+ "\n";
	}
	return a;
}





function submitData() {
  	var name = document.getElementById('1').value;
  	var email = document.getElementById('2').value;
  	
  	
  	var gender = validateGender();
  	var d = document.getElementById('6').value;
  	var m = document.getElementById('7').value;
  	var y = document.getElementById('8').value;
  	var date = Date(d,m,y);
  	var bgroup = document.getElementById('9').value;
  	var degree = validateDegree();
  	var uid = document.getElementById('10').value;
  	

  	var xhttp = new XMLHttpRequest();
  	xhttp.open("POST", "data.php", true);
  	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	if(name == "" || email == "" || uname == "" || 
  		gender == "" || d == "" || m== "" || y == "" || bgroup == ""|| 
  		degree == "" || uid == "")
  	{
  		xhttp.send("er = Please fill all fields.");
  	}
  	else
  	{
	  	if(date == false)
	  	{
	  		xhttp.send("er = Date is not valid.");
	  	}	
	  	else
	  	{
	  		if(pass!=cpass)
		  		{
		  			xhttp.send("er = Password is been not matched.");
		  		}
		  	else
		  	{
		  		var n = letterValid(name);
		  		var e = Email(email);
		  		var u = NumberValid(uid);
		  		if(n && e && u)
				{
					xhttp.send("Name="+name+"&Email="+email+"&Uname="+uname+"&Pass="+
							pass+"&Gender="+gender+"&Day="+d+"&Month="+m+"&Year="+y+"&BG="+
							bgroup+"&Degree="+degree+"&Uid="+uid);
					console.log(bgroup);
					reset();
				}
				else{
						xhttp.send("er= Invalid Event");
					}
		  		}
	  	}
    }
  
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	var errorHead = document.getElementById("error");
     	errorHead.innerHTML = this.responseText;
    }};
}

