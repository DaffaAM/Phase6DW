<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

    $connect = mysqli_connect('localhost', 'root', '', 'dumblibrary');

    $query = mysqli_query($connect, "SELECT * FROM book_tb WHERE id = '".$_GET['id']."'");
    $fetch = mysqli_fetch_assoc($query);
    ?>

    <div class="box">
    	<img src="<?= $fetch['img'] ?>" width="300" height="300">
    	<h2><?= $fetch['name'] ?></h2>
    	<div>
    		<p><?=$fetch["writer_id"]?></p>
    		<p>Tahun = <?=$fetch["Publication_year"]?></p>
    		<p>Kategori = <?=$fetch["category_id"]?></p>
    	</div>
    	<form action="inpage.php">
    		<input type="number" name="id" value="<?=$fetch["id"]?>" hidden>
    		<input type="number" name="banyak" value="1">
    		<input nama="pesan"  type="submit" value="Pesan">
    	</form>
    </div>

  </body>
</html>
