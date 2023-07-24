
<!DOCTYPE html>
<html>
<head>
  <title>Library Management System - Dashboard</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
  }
  
  .container {
    max-width: 960px;
    margin: 50px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  h1 {
    text-align: center;
    margin-bottom: 30px;
  }
  
  .dashboard {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap:wrap;
  }
  
  .dashboard-item {
    width: 200px;
    height: 200px;
    margin: 60px;
    background-color: #e9e9e9;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-weight: bold;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s ease;
    border-radius: 50px;
    background: #b89d9d;
    box-shadow:  27px 27px 53px #20b923,
             -27px -27px 53px #d4b5b5;
  }
  
  .dashboard-item:hover {
    background-color: #ccc;
  }
  .cards {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }
  
  .cards .red {
    background-color: #f43f5e;
  }
  
  .cards .blue {
    background-color: #3b82f6;
  }
  
  .cards .green {
    background-color: #22c55e;
  }
  
  .cards .card {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    height: 100px;
    width: 250px;
    border-radius: 10px;
    color: white;
    cursor: pointer;
    transition: 400ms;
  }
  
  .cards .card p.tip {
    font-size: 1em;
    font-weight: 700;
  }
  
  .cards .card p.second-text {
    font-size: .7em;
  }
  
  .cards .card:hover {
    transform: scale(1.1, 1.1);
  }
  
  .cards:hover > .card:not(:hover) {
    filter: blur(10px);
    transform: scale(0.9, 0.9);
  }
  .left-nav {
    float: left;
    width: 200px;
  }
  
  .cards {
    display: flex;
    flex-direction: column;
  }
  
  .card {
    padding: 10px;
    margin-bottom: 10px;
    background-color: #ccc;
  }
  
  .container {
    margin-left: 220px;
  }
  
  /* Rest of your CSS styles */
  
  </style>
</head>
<body>
    <div class="left-nav">
        <div class="cards">
          <a href="addbook.html" class="card red">
            <p class="tip">ADD BOOKS</p>
            <p class="second-text"></p>
          </a>
          <a href="add-user.html" class="card blue">
            <p class="tip">ADD MEMBERS</p>
            <p class="second-text"></p>
          </a>
          <a href="lms/index.html" class="card green">
            <p class="tip">LOGOUT</p>
            <p class="second-text"></p>
          </a>
        </div>
      </div>
      

  <div class="container">
    <h1>Library Management System</h1>
    <div class="dashboard">
      <a href="bookupdate.php" class="dashboard-item">
        <img src="book-image.jpg" alt="">
        <span>Books</span>
      </a>
      <a href="update.php" class="dashboard-item">
        <span>Members</span>
      </a>
      <a href="transactions.html" class="dashboard-item">
        <span>Transactions</span>
      </a>
      <a href="reports.html" class="dashboard-item">
        <span>Reports</span>
      </a>
    </div>
  </div>
</body>
</html>
