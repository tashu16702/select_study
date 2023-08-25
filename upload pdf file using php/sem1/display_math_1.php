<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
      include 'db_1.php';

      $sql="SELECT pdf from pdf_math_1_file";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdfmath1/<?php echo $info['pdf'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    </div>

  </body>
</html>
