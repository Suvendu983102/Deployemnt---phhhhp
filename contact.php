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

<!-- <img class="ban" src="images/medical.jpg" /> -->

<div class="container mainarea">
    <div class="row">

    <?php 
include("admin/common/db.php");
$sel="SELECT * FROM pages WHERE id=1";
   $rs=$con->query($sel);
   $row=$rs->fetch_assoc();
    ?>
       

        <div class="col-md-4">
        
        <h1>Address: PFW6+CG6, Moshpukur Barbaria P.O. Jagannathpur kolkata, Barbaria, Barasat, Kolkata, West Bengal 700125
Get there:
49 mins
Phone: 084204 30756</h1>
        </div>

        <div class="col-md-8">
            <h1>location:</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.4876816967458!2d88.46507!3d22.747276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8988e853e84ed%3A0x65516e5f4b4ab735!2sEminent%20Group%20Of%20College!5e0!3m2!1sen!2sin!4v1757933726309!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>




    </div>
</div>




<p class="footer"> &copy; @ All right resarved Abc</p>
  
    
</body>
</html>