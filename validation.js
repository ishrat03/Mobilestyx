function validation()                                    
{ 
    var name = document.forms["RegForm"]["name"];               
    var email = document.forms["RegForm"]["email"];    
    var password = document.forms["RegForm"]["password"];  
    var mobile =  document.forms["RegForm"]["mobile"];  
    var gender = document.forms["RegForm"]["gender"];
    var alphabets=/^[a-zA-Z ]*$/; 
    var alphanumeric=/^(?=.*\d)\w+$/;  
    var num=mobile.value;
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
    if (alphabets.test(name.value)==false)
     {
     	window.alert("Please enter only alphabets.");
     	name.focus();
     	return false;
     }
    if (email.value=="")                 
    { 
        window.alert("Please enter your e-mail id."); 
        email.focus(); 
        return false; 
    } 
   if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
    
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
    if (password.value == "")                               
    { 
        window.alert("Please enter your password."); 
        password.focus(); 
        return false; 
    } 
       if (alphanumeric.test(password.value)==false)
        {
        	window.alert("Please enter password in alphanumeric format.");
        	window.focus();
        	return false;
        }
    if (/^\d{10}$/.test(num)==false)                                   
    { 
        window.alert("Mobile number must be 10 digits."); 
        mobile.focus(); 
        return false; 
    } 
   
    if (gender.value == "")                           
    { 
        window.alert("Please select your gender."); 
        gender.focus(); 
        return false; 
    } 
   
    return true; 
}