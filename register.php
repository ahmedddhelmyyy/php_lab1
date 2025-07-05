<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register Form</title>

  <style>
  /* animation background */
body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: linear-gradient(-45deg, #93c5fd, #fca5a5, #fcd34d, #6ee7b7);
  background-size: 400% 400%;
  animation: gradientBG 15s ease infinite;

  display: flex;
  justify-content: center;
  padding: 3rem 1rem;
  min-height: 100vh; 
  box-sizing: border-box;
}


    @keyframes gradientBG {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

  
  fieldset {
  border: none;
  background: rgba(255, 255, 255, 0.85);
  padding: 1.2rem; 
  border-radius: 0.8rem;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  width: 90%;
  max-width: 380px; 
  backdrop-filter: blur(8px);
}


    legend h3 {
      margin: 0;
      color: #1e3a8a;
      text-align: center;
      font-size: 1.8rem;
    }

 form {
  display: flex;
  flex-direction: column;
  gap: 0.2rem; 
}


    label {
      font-weight: bold;
      color: #1f2937;
      margin-bottom: 0.2rem;
    }

    input, select, button {
      padding: 0.7rem;
      border-radius: 0.5rem;
      border: 1px solid #cbd5e1;
      font-size: 1rem;
      width: 100%;
      box-sizing: border-box;
    }

    input:focus, select:focus {
      outline: none;
      border-color: #3b82f6;
      box-shadow: 0 0 5px rgba(59, 130, 246, 0.5);
    }

    hr {
      border: none;
      border-top: 1px dashed #ccc;
    }

    button {
      background-color: #3b82f6;
      color: white;
      border: none;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.2s, background-color 0.3s;
    }

    button:hover {
      background-color: #2563eb;
      transform: scale(1.02);
    }

  
    .gender-group {
      display: flex;
      gap: 1rem;
      align-items: center;
    }
  </style>
</head>

<body>

  <fieldset>
    <legend><h3>Register Form</h3></legend>

    <form action="result.php" method="post">
      <div>
        <label>Name:</label>
        <input type="text" name="name" required>
      </div>

      <hr>

      <div>
        <label>Email:</label>
        <input type="email" name="email" required>
      </div>

      <hr>

      <div>
        <label>Password:</label>
        <input type="password" name="password" required>
      </div>

      <hr>

      <div>
        <label>Confirm Password:</label>
        <input type="password" name="cPass" required>
      </div>

      <hr>

      <div>
        <label>Mobile:</label>
        <input type="tel" name="phone" required>
      </div>

      <hr>

      <div>
        <label>Gender:</label>
        <div class="gender-group">
          <label><input type="radio" name="gender" value="male" required> Male</label>
          <label><input type="radio" name="gender" value="female" required> Female</label>
        </div>
      </div>

      <hr>

      <div>
        <label>Date of Birth:</label>
        <input type="date" name="dob" required>
      </div>

      <hr>

      <div>
        <label>Country:</label>
        <select name="country" required>
          <option value="">--Select--</option>
          <option value="Egypt">Egypt</option>
          <option value="KSA">KSA</option>
          <option value="USA">USA</option>
        </select>
      </div>

      <div>
        <button type="submit">Register</button>
      </div>
    </form>
  </fieldset>

</body>
</html>
