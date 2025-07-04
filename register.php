<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
</head>
<body>
  <h2>Register</h2>
  <form action="submit.php" method="POST">
    <label>Full Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Phone:</label><br>
    <input type="tel" name="phone" required><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female<br><br>

    <label>Date of Birth:</label><br>
    <input type="date" name="dob" required><br><br>

    <label>Country:</label><br>
    <select name="country" required>
      <option value="">--Select--</option>
      <option value="Egypt">Egypt</option>
      <option value="USA">USA</option>
      <option value="UK">UK</option>
    </select><br><br>

 
    <button type="submit">Register</button>
  </form>
</body>
</html>
