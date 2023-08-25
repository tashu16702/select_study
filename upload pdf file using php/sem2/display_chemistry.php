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
      include 'db_2.php';

      $sql="SELECT pdf from sem_2_chemistry_file";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="pdfchemistry/<?php echo $info['pdf'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    </div>

  </body>
</html>
