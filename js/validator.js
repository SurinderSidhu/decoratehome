function validations()
    {
if(document.htmlform.firstname.value =="")
{
alert("Enter your name");
document.htmlform.firstname.value="";
document.htmlform.firstname.focus();
return false;
}
if(document.htmlform.email.value =="")
{
alert("Enter an email address. So we could contact you");
document.htmlform.email.value="";
document.htmlform.email.focus();
return false;
}
if(document.htmlform.email.value.indexOf("@")==-1)
{
alert("Re-enter the E-mail E.g. abc@xyz.com");
document.htmlform.email.value="";
document.htmlform.email.focus();
return false;
}
if(document.htmlform.email.value.indexOf(".")==-1)
{
alert("Re-enter the E-mail E.g.abc@xyz.com");
document.htmlform.email.value="";
document.htmlform.email.focus();
return false;
}
var a = document.htmlform.phone.value;
if(a=="")
{
alert("Enter a phone or mobile number. We will keep it private.");
document.htmlform.phone.value="";
document.htmlform.phone.focus();
return false;
}
if(isNaN(a))
{
alert("Enter the valid phone Number(Like : 0211500949)");
document.htmlform.phone.value="";
document.htmlform.phone.focus();
return false;
}
if((a.length < 10))
{
alert(" Your Phone Number must be 1 to 10 Integers");
document.htmlform.phone.value="";
document.htmlform.phone.focus();
return false;
}
if(document.htmlform.pincode.value =="")
{
alert("Enter your pincode");
document.htmlform.pincode.value="";
document.htmlform.pincode.focus();
return false;
}
if(document.htmlform.message.value=="")
{
alert("Write in message what are your Questions?");
document.htmlform.message.value="";
document.htmlform.message.focus();
return false;
} 
var letters = /^[A-Za-z]+$/;  
if(document.htmlform.firstname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Name must have alphabet characters only');  
document.htmlform.firstname.value="";
document.htmlform.firstname.focus();
return false;
} 
return true;
}