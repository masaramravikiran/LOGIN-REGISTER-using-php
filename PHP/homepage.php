<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOMEPAGE</title>
</head>
<body>
  <div style="text-align:center; padding:15%;">
    <p style="font-size: 30px;">Welcome to the homepage</p>
    <p style="font-size: 20px;">You are logged in as <?php echo $_SESSION['username'];
    $email = $_SESSION['email'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    while ($row = mysqli_fetch_assoc($query)) {
      $username = $row['username'];
    }
    ?></p>
  </div>
</body>
</html>