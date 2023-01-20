<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SPARKS BANKING SYSTEM</title>

    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body{
        background-color: #FF7F50;
      }
      .heading{
        display: flex;
        justify-content: center;
        margin-top: 10px;
      }
      .parent{
        width: 80%;
        height: 80%;
        display: flex;
        margin: 10px auto;
      }
      .footer{
        display: flex;
        justify-content:space-between;
        align-items:center;
        background-color: #008B8B;
        color: cornsilk;
        padding: 0 50px;
      }
    </style>

  </head>
  <body>
    <?php

      include 'connection.php';

      $selectquery="select * from history";
      $query=mysqli_query($conn,$selectquery);
    ?>

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

    <div class="heading">
      <h1>TRANSACTION STATUS</h1>
    </div>


    <div class="table-responsive parent">
      <table class="table table-secondary">
        <thead>
          <tr>
            <th>ID</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount Transferred</th>
          </tr>
        </thead>

        <tbody>
        <?php
          while($res=mysqli_fetch_array($query))
          {
        ?>
          <tr>
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['from']; ?></td>
            <td><?php echo $res['to']; ?></td>
            <td><?php echo $res['transfer_amount']; ?></td>
          </tr>
        <?php
        }
        ?>
        </tbody>
      </table>
    </div>

    <div class="footer ">
      <p>Copyright 2023@Sparks Banking System </p>
      <p>Designed by Venkata Sai Monika</p>
    </div>

  </body>
</html>
