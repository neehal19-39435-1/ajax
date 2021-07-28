        function isValid(){
           
            var username=document.forms["reg"]["username"].value;
            var password=document.forms["reg"]["password"].value;
            var valid = true;
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