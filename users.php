<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Users</title>
  <style>
    body {
      background: linear-gradient(to right, #c7d2fe, #a5b4fc);
      font-family: Arial, sans-serif;
      padding: 2rem;
    }
    h2 {
      text-align: center;
      color: #1e40af;
    }
    table {
      width: 100%;
      max-width: 900px;
      margin: 2rem auto;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 1rem;
      border-bottom: 1px solid #e5e7eb;
      text-align: left;
    }
    th {
      background-color: #1e40af;
      color: white;
    }
    tr:hover {
      background-color: #f9fafb;
    }
  </style>
</head>
<body>

<h2>Registered Users List</h2>

<?php
$file = 'users.json';
if (file_exists($file)) {
  $json = file_get_contents($file);
  $users = json_decode($json, true);

  if (!empty($users)) {
    echo "<table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Country</th>
      </tr>";

    foreach ($users as $user) {
      echo "<tr>
        <td>".htmlspecialchars($user['name'])."</td>
        <td>".htmlspecialchars($user['email'])."</td>
        <td>".htmlspecialchars($user['phone'])."</td>
        <td>".htmlspecialchars($user['gender'])."</td>
        <td>".htmlspecialchars($user['dob'])."</td>
        <td>".htmlspecialchars($user['country'])."</td>
      </tr>";
    }

    echo "</table>";
  } else {
    echo "<p style='text-align:center;'>No users registered yet.</p>";
  }
} else {
  echo "<p style='text-align:center; color:red;'>No users file found.</p>";
}
?>

</body>
</html>
