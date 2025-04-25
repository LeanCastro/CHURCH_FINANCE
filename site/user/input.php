<?php 
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input - Tanolong Christian Church</title>
  <link rel="stylesheet" href="input.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
      <nav>
        <a href="dashboard.php"><i class="fas fa-home" ></i>Home</a><hr class="hr">

        <a href="record.php"><i class="fas fa-clipboard-list"></i> Records<br>Status</a><hr class="hr">

        <a href="input.php"><i class="fa-solid fa-pen-to-square"></i>Input</a><hr class="hr">

        <a href="/login/index.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </nav><hr class="hr">

      <div class="user-profile">
        <img src="treasurer.png" alt="Pastor Avatar">
        <p>Treasurer</p>
      </div>
    </div>
    <!--End of the Sidebar -->

    <!-- Container -->
  <form action="insertData.php" method="post">   
    <div class="main-content">
      <div class="section tithes-offering" id="section">
        <h3>Tithes and Offering</h3>
        <div class="input-group">
          <i class="fa-solid fa-money-bill-1-wave"></i>
          <input type="text" name="amount" placeholder="Enter amount" autocomplete="off" required>
        </div>
        <div class="radio-div">
          <label>Monday</label>
          <input type="radio" name="radio">
          <label>Tuesday</label>
          <input type="radio" name="radio">
          <label>Wenesday</label>
          <input type="radio" name="radio">
          <label>Thursday</label>
          <input type="radio" name="radio">
          <label>Friday</label>
          <input type="radio" name="radio">
          <label>Saturday</label>
          <input type="radio" name="radio">
          <label>Sunday</label>
          <input type="radio" name="radio">
        </div>
      </div>
      
      <div class="section" id="div-mid">
        <p><span>Note:</span> Expenses (optional) – Only fill this in if there are any expenses. If none, you can leave it blank.</p>
      </div>
    
      <div class="section expenses" id="div-mid">
        <h3>Expenses</h3>
        <div class="expenses-grid">
          <div class="column">
            <span>Purpose</span>
            <div class="input-group"><i class="fa-solid fa-cart-plus"></i><input type="number"></div>
            <div class="input-group"><i class="fa-solid fa-cart-plus"></i><input type="number"></div>
            <div class="input-group"><i class="fa-solid fa-cart-plus"></i><input type="number"></div>
            <div class="input-group"><i class="fa-solid fa-cart-plus"></i><input type="number"></div>
            <div class="input-group"><i class="fa-solid fa-cart-plus"></i><input type="number"></div>
          </div>

          
          <div class="column">
            <span>Total Cost</span>
            <div class="input-group"><i class="fa-solid fa-money-bill-1-wave"></i><input type="text"></div>
            <div class="input-group"><i class="fa-solid fa-money-bill-1-wave"></i><input type="text"></div>
            <div class="input-group"><i class="fa-solid fa-money-bill-1-wave"></i><input type="text"></div>
            <div class="input-group"><i class="fa-solid fa-money-bill-1-wave"></i><input type="text"></div>
            <div class="input-group"><i class="fa-solid fa-money-bill-1-wave"></i><input type="text"></div>
          </div>

        </div>
      </div>

    <!--  Submit Section-->
      <div class="section submit" id="last-div">
        <p><span>Are you sure?</span> Please double-check the information you entered. thank you</p>
        <button type="submit" name="submit" value="submit" class="submit-btn">Submit</button>
      </div><br>
  </form>

      <h5>
        Colossians 3:23<br><br>
        Whatever you do, work at it with your whole being, for the Lord and not for men
      </h5><br><br>
    </div>
</body>
</html>