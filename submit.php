<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submitted Info</title>
</head>
<body>
  <h2>Registration Details</h2>

  <p><strong>Full Name:</strong> <?= htmlspecialchars($_POST['name']) ?></p>
  <p><strong>Email:</strong> <?= htmlspecialchars($_POST['email']) ?></p>
  <p><strong>Password:</strong> <?= htmlspecialchars($_POST['password']) ?></p>
  <p><strong>Phone:</strong> <?= htmlspecialchars($_POST['phone']) ?></p>
  <p><strong>Gender:</strong> <?= htmlspecialchars($_POST['gender']) ?></p>
  <p><strong>Date of Birth:</strong> <?= htmlspecialchars($_POST['dob']) ?></p>
  <p><strong>Country:</strong> <?= htmlspecialchars($_POST['country']) ?></p>
 
</body>
</html>
<?php
} else {
  echo "Invalid request.";
}
