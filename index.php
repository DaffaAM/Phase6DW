<!-- Copyright Daffa -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dumb Library</title>

</style>

  </head>
  <body>
    <h1>DUMB LIBRARY</h1>
<div style="display:inline-block">
    <form action="insert.php">
    <input type="submit" value="Go to Add Book" />
</form>
</div>
<div style="display:inline-block">
<form action="kategori.php">
    <input id="kanan" type="submit" value="Go to Add Category" />
</form>
</div>

<div style="display:inline-block">
<form action="writer.php">
    <input id="kanan" type="submit" value="Go to Add Writer " />
</form>
</div>

<br>



        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'dumblibrary');

        $query1 = mysqli_query($connect, "SELECT * FROM category_tb");
        $count = mysqli_num_rows($query1);

        foreach ($query1  as $key => $value) {
        $query2 = mysqli_query($connect, "SELECT * FROM book_tb WHERE id = '".$value['id']."'");
        $fetch = mysqli_fetch_assoc($query2);
        ?>
        <div class="box">
          <img style="display:inline-block" src="<?= $fetch['img'] ?>" width="300" height="300">
        	<h2><?= $fetch['name']." ".$value['name'] ?></h2>
        <form action="detail.php" method="get">
        	<input type="number" name="id" value="<?=$value['id']?>" hidden>
        	<input type="submit" value="Detail">
        </form>
        </div>
        <?php } ?>





</div>
  </body>
</html>
