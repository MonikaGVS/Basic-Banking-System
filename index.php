<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SPARKS BANKING SYSTEM</title>
    <script src="https://use.fontawesome.com/f06226ee8d.js"></script>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      .main{
        height: 93vh;
        background-image: url(https://s3-us-east-2.amazonaws.com/maryville/wp-content/uploads/2020/08/18101507/MVU-BSFINS-2020-Q1-Skyscraper-What-Is-Investment-Banking_-Definition-Careers-Salary-v3-01-1.jpg);
        margin: 0;
        margin-top: -70px;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .heading{
        background-color: #FFC0CB;
        display: flex;
        justify-content: center;
      }
      .head{
        font-size: 50px;
        margin-top: 70px;
      }
      .cont{
        margin-top: 40px;
      }
      .icon{
        color: #FFD700;
        background-color: black;
        margin-top: 50px;
      }
      .fa-bank{
        padding: 3px 3px;
      }
      .one{
        display:flex;
        justify-content:space-around;
        align-items: center;
        margin-top: 40px;
      }
      .footer{
        display: flex;
        justify-content:space-between;
        align-items:center;
        background-color: #2E8B57;
        color: #FFC0CB;
        padding: 0 50px;
      }
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="outer">
      <!-- navbar -->
      <nav class="navbar navbar-expand-sm bg-secondary navbar-dark justify-content-between">
        <a class="navbar-brand" href="#"><i class="fa fa-bank fa-lg"></i>SPARKS BANK</a>
        <ul class="navbar-nav navbar-right ">

          <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="users.php">TRANSFER AMOUNT</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="history.php">TRANSACTION HISTORY</a>
          </li>
        </ul>
      </nav>

      <div class="main">

        <div class="heading">
          <h2 class="head">WELCOME TO SPARKS BANK</h2>
        </div>


        <div class="one">
          <div class="t1 ">
            <h1><i class="fa fa-dollar fa-5x icon"></i></h1>
            <a href="users.php"><button type="button" class="btn btn-secondary">Transfer amount</button></a>
          </div>


          <div class="t1">
            <h1><i class="fa fa-history fa-5x icon"></i></h1>
            <a href="history.php"><button type="button" class="btn btn-secondary">View transaction</button></a>
          </div>
        </div>

      </div>
    </div>

    <div class="footer ">
      <p>Copyright 2023@Sparks Banking System</p>
      <p>Designed by Venkata Sai Monika</p>
    </div>


  </body>
</html>
