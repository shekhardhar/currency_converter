<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: logout.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
		/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #555555;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

input[type=button]{
		background-color: #555555;
		color: white;
		padding: 12px 20px;
		border: none;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		width: auto;
	}
input[type=reset]{
		background-color: #555555;
		color: white;
		padding: 12px 20px;
		border: none;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		width: auto;
	}
    </style>
	<script language="JavaScript">
function dollarConverter(){
document.converter.inr.value = document.converter.dollar.value * 76.69
}
function inrConverter(){
document.converter.dollar.value = document.converter.inr.value * 0.013
}
</script>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
	
<div class="content" >
	<form name="converter">
<table border="0" align="center">
<caption style="text-align:center"><h3>Currency Converter<h3></caption>
<tr>
<td><h4>US Dollar: </h4></td><td><input type="text" name="dollar" onChange="dollarConverter()" /></td>
<td>&nbsp;<td>
<td><i class="fa fa-exchange" style="font-size:60px;"></i><td>
<td><h4>Indian Rupees: </h4></td><td><input type="text" name="inr" onChange="inrConverter()" /></td>

</tr>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;<td>
<td colspan="2" align="center"><input type="button" value="Convert!" /></td>
<td colspan="2" align="center"><input type="reset" value="Reset" /></td>
<td>&nbsp;<td>
<td>&nbsp;</td>

</tr>
</table>
</form>
</div>
</body>
</html>