<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="css/custom.css">
   <style>
    .footer{
      background-color: #000;
      color: #FFF;
      text-align: center;
      padding: 20px;
    }
   </style>
</head>
<body>
    <?php include ("inc/menu.php"); ?>

<img class="ban" src="images/medical.jpg" />

<div class="container mainarea">
    <div class="row">

    <?php 
include("admin/common/db.php");
$sel="SELECT * FROM pages WHERE id=1";
   $rs=$con->query($sel);
   $row=$rs->fetch_assoc();
    ?>
       

        <div class="col-md-4">
          <img src="admin/pageimg/<?php echo $row['image']; ?>"  style="width: 100%;"/>
        </div>

        <div class="col-md-8">
          <h2><?php echo $row['name']; ?></h2>

          <p><?php echo  $row['details'];?></p>
  </div>




    </div>
</div>




<p class="footer"> &copy; @ All right resarved Abc</p>
  
    
</body>
</html>