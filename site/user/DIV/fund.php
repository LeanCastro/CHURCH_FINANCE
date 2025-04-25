<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="fund.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Tanolong Christian Church</title>
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

  
  <!-- Main Content here-->
   <div class="main">

    <div class="search-container">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input type="text" placeholder="Search...                                                                                                  (ex. 12/10/25)">
    </div>
</div>
<!-- four section with different values -->
<div class="section">
  <a href="/user/record.html"><div class="card" id="status"><i class="fa-solid fa-signal"></i>Status</div></a>
  <a href="#"><div class="card"><i class="fa-solid fa-money-check-dollar"></i>Church Fund</div></a>
  <a href=""><div class="card"><i class="fa-solid fa-cart-shopping"></i>Expenses</div></a>
  <a href=""><div class="card"><i class="fa-solid fa-list-check"></i>Newest</div></a>
</div>

<!-- Table should be here -->
 <table>
  <thead>
    <tr>

      <th> Funds Breakdown </th>
      <th> Allocation Percent </th>
      <th> Allocation Amount</th>
      <th> Date </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th>leandro</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </tbody>
 </table>
</body>
</html>