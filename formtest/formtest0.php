<html> 
<head><title>Sample Web Page 7: Form</title></head> 
<body>
 
<h1>Please sign Up Now!</h1>
 
<form action="formtest.php" 
method="post"> 

Your Name: <input name="visitor_name" type="text"> 
<p> 
Password: <input name="password" type="password"> 
<p> 
<input name="licenseOK" type="checkbox"> I accept the license conditions. 
<p> 
Specify account type desired:<br> 
<input name="account_type" type="radio" value="basic"> Basic ($25) 
<p> 
<input name="account_type" type="radio" value="standard" checked> Standard ($50) 
<p> 
<input name="account_type" type="radio" value="deluxe"> Deluxe ($100) 
<p> 
<input name="userid" type="hidden" value="137273"> 
<p> 
Please select your OS: 
<select name="system"> 
<option selected> Windows 
<option> Mac 
<option> Unix 
</select> 
<p> 

Please select your optional features: 
<select multiple name="options[]" > 
    <option value="chat">chat 
    <option value="email">email 
    <option value="file transfer">file transfer 
    <option value="directory">directory 
    <option value="shell">shell 
    <option value="remote control">remote control 
</select> 
<p> 
Please write your comments here.<br> 

<textarea name="remarks" rows="10" cols="25"> 
I'm very pleased with your service!!! 
</textarea> 

<p> 
<input type="submit" value="Sign Up"> 
<input type="reset">
 
</form> 

</body> 
</html> 
