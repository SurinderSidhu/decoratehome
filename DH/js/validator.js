function validations()
    {
if(document.htmlform.name.value =="")
{
alert("Enter your first name");
document.htmlform.name.value="";
document.htmlform.name.focus();
return false;
}
if(document.htmlform.lastname.value =="")
{
alert("Enter your last name");
document.htmlform.lastname.value="";
document.htmlform.lastname.focus();
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
alert(" Please enter a valid phone or mobile number");
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
if(document.htmlform.description.value=="")
{
alert("Write in discription what is your Questions?");
document.htmlform.description.value="";
document.htmlform.description.focus();
return false;
} 
var letters = /^[A-Za-z]+$/;  
if(document.htmlform.name.value.match(letters))  
{  
return true;  
}  
else  
{  
alert("Name must have characters only");  
document.htmlform.name.value="";
document.htmlform.name.focus();
return false;
} 
var letters = /^[A-Za-z]+$/; 
if(document.htmlform.lastname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert("Last Name must have characters only");  
document.htmlform.lastname.value="";
document.htmlform.lastname.focus();
return false;
} 
alert("Thank you for your suggestion. We will contact you soon.");  
return true;
document.htmlform.name.value="";
document.htmlform.phone.value="";
document.htmlform.email.value="";
document.htmlform.pincode.value="";
document.htmlform.discription.value="";
}