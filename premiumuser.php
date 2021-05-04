<!doctype html>
<html>
<head>
<title>Login/Signup</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container jumbotron">
<form>
  <b>Name</b> <br><input type="text" id="names" name="fname"><br><br>
  <b>Email</b> <br><input type="text" id="mail" name="fname"><br><br>
  <b>Password</b><br> <input type="password" id="pass" name="fname"><br><br>
  <b>Gender: Male</b><input type="radio" id="gen1" name="gender" value="male">
  <b>Female</b><input type="radio" id="gen2" name="gender" value="female"><br><br>
  <b>Qualification</b><br> <input type="text" id="qual" name="fname"><br><br>
  <b>Skills</b><br> <input type="text" id="skill" name="fname"><br><br>
  <b>About Yourself</b><br> <input type="text" id="abt" name="fname"><br><br>
  <input type="button" value="submit" onclick="validateForm()">
</form>
</div>
</body>
</html>