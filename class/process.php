<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form details</title>
</head>
<body>
  <h2>Submitted Details</h2>
  <?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $gender = $_POST['gender'];
   $course = $_POST['course'];

   echo "Name:" . $name . "<br>";
   echo "Email:" . $email . "<br>";
   echo "Password:" . $password . "<br>";
   echo "gender:" . $gender . "<br>";
   echo "course:" . $course . "<br>";

   ?>   

</body>
</html>