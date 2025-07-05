<?php
function isValidPassword($password) {
  // i got this regex from internet 
 return preg_match('/^[A-Za-z\d]{6}$/', $password);

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $password = $_POST['password'];
  $confirmPass = $_POST['cPass'];
  $phone = htmlspecialchars(trim($_POST['phone']));
  $gender = htmlspecialchars($_POST['gender']);
  $dob = htmlspecialchars($_POST['dob']);
  $country = htmlspecialchars($_POST['country']);

  $errors = [];

  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
  }

  
  if (!isValidPassword($password)) {
    $errors[] = "Password must be at least 8 characters with uppercase, lowercase, number, and symbol.";
  }


  if ($password !== $confirmPass) {
    $errors[] = "Passwords do not match.";
  }

  if (count($errors)) {
    echo "<h3 style='color: red; text-align: center;'>Validation Errors:</h3><ul>";
    foreach ($errors as $e) echo "<li style='color:red;'>$e</li>";
    echo "</ul><a href='javascript:history.back();'>← Go back</a>";
    exit;
  }


  $user = [
    "name" => $name,
    "email" => $email,
    "phone" => $phone,
    "gender" => $gender,
    "dob" => $dob,
    "country" => $country
  ];

  $file = 'users.json';
  $data = [];

  if (file_exists($file)) {
    $json = file_get_contents($file);
    $data = json_decode($json, true) ?? [];
  }

  $data[] = $user;
  file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Success</title>
  <style>
    body {
      background: linear-gradient(to right, #86efac, #a5f3fc);
      font-family: sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .card {
      background: white;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      max-width: 450px;
    }
    h2 { color: #059669; }
    a {
      display: inline-block;
      margin-top: 1rem;
      color: #0ea5e9;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>🎉 Registration Successful</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>DOB:</strong> <?= $dob ?></p>
    <p><strong>Country:</strong> <?= $country ?></p>
    <a href="users.php">View All Registered Users</a>
  </div>
</body>
</html>
<?php
} else {
  echo "Invalid request.";
}
?>
