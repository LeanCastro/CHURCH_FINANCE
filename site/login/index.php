<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanolong Christian Church</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tanolong Christian Church</h1>
  </header>

  <form action="auth-log.php" method="post">
  <main class="container">
    <div class="left-panel">
      <h2>FAITH FINANCE</h2>
      <p>We are God's faithful stewards.</p>
      <img src="cross-logo.png" alt="Cross with cloth" class="cross-logo">
      <p class="church-name">Tanolong Christian Church</p>
    </div>

    <div class="right-panel">
      <img src="pehc-logo.png" alt="Church Logo" class="pehc-logo">
      <form class="login-form">

        <div class="input-group">
          <span class="icon">👤</span>
          <input type="text" placeholder="Username" name="username" autocomplete="off" required>
        </div>
        <div class="input-group">
          <span class="icon">🔒</span>
          <input type="password" placeholder="Password" name="password" autocomplete="off" required>
        </div>
        <button type="submit" class="login-button">Login</button>
      </form>
    </div>
  </main>
</form>
</body>
</html>
