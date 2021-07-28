		function isValid(){
			var fname=document.forms["reg"]["fname"].value;
			var lname=document.forms["reg"]["lname"].value;
			var gender=document.forms["reg"]["gender"].value;
			var dob=document.forms["reg"]["dob"].value;
			var religion=document.forms["reg"]["religion"].value;
			var email=document.forms["reg"]["email"].value;
			var username=document.forms["reg"]["username"].value;
			var password=document.forms["reg"]["password"].value;
			var valid = true;
			if(fname==="")
			{
				document.getElementById('firstNameErr').innerHTML=" Field cannot be empty";
				valid = false;
			}

			if(lname==="")
			{
				document.getElementById('lastNameErr').innerHTML=" Field cannot be empty";
				valid = false;
			}

			if(gender==="")
			{
				document.getElementById('genderErr').innerHTML=" Field cannot be empty";
				valid = false;
			}

			if(dob==="")
			{
				document.getElementById('dateOfbirthErr').innerHTML=" Field cannot be empty";
				valid = false;
			}

			if(religion==="")
			{
				document.getElementById('religionErr').innerHTML=" Field cannot be empty";
				valid = false;
			}

			if(email==="")
			{
				document.getElementById('emailErr').innerHTML=" Field cannot be empty";
				valid = false;
			}

			if(username==="")
			{
				document.getElementById('userNameErr').innerHTML=" Field cannot be empty";
				valid = false;
			}

			if(password==="")
			{
				document.getElementById('passWordErr').innerHTML=" Field cannot be empty";
				valid = false;
			}
			return valid;
		}
