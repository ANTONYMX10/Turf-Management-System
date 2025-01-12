<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interactive Sign-In</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <style>
    *, *:before, *:after {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: 'Raleway', sans-serif;
      background: linear-gradient(to bottom right, #74ebd5, #acb6e5);
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .container {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .container:hover .top:before, 
    .container:hover .top:after,
    .container:hover .bottom:before, 
    .container:hover .bottom:after {
      margin-left: 200px;
      transform-origin: -200px 50%;
      transition-delay: 0s;
    }

    .container:hover .center {
      opacity: 1;
      transition-delay: 0.2s;
    }

    .top, .bottom {
      position: relative;
    }

    .top:before, .top:after,
    .bottom:before, .bottom:after {
      content: '';
      display: block;
      position: absolute;
      width: 200vmax;
      height: 200vmax;
      top: 50%;
      left: 50%;
      margin-top: -100vmax;
      transform-origin: 0 50%;
      transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
      z-index: 1; /* Set a low z-index */
      opacity: 0.65;
      transition-delay: 0.2s;
      pointer-events: none; /* Prevent interference */
    }

    .top:before {
      transform: rotate(45deg);
      background: #e46569;
    }

    .top:after {
      transform: rotate(135deg);
      background: #ecaf81;
    }

    .bottom:before {
      transform: rotate(-45deg);
      background: #60b8d4;
    }

    .bottom:after {
      transform: rotate(-135deg);
      background: #3745b5;
    }

    .center {
      position: absolute;
      width: 400px;
      padding: 30px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 2; /* Ensure it is above the background */
      opacity: 0;
      transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
      transition-delay: 0s;
      color: #333;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .center input {
      width: 100%;
      padding: 15px;
      margin: 5px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-family: inherit;
      font-size: 16px;
    }

    .center h2 {
      margin: 10px 0;
      font-size: 20px;
    }

    .center input[type="submit"] {
      background: #3745b5;
      color: white;
      cursor: pointer;
      border: none;
      transition: background-color 0.3s;
    }

    .center input[type="submit"]:hover {
      background: #2a358a;
    }

    .error-message {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="top"></div>
    <div class="bottom"></div>
    <div class="center">
      <h2>Login</h2>
      <?php if (isset($_GET['error'])): ?>
        <p class="error-message">Invalid Username or Password!</p>
      <?php endif; ?>
      <form method="post" action="process_login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="off">
        
        <input type="submit" value="Login">
      </form>
    </div>
  </div>

  <script>
    // JavaScript for additional interactivity can be added here
  </script>
</body>
</html>
