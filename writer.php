<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="kanan"style="display:inline-block">
        <form action="insert.php">
        <input id="kanan" type="submit" value="Go to Add Book" />
    </form>
    </div>
    <div id="kanan" style="display:inline-block">
    <form action="kategori.php">
        <input id="kanan" type="submit" value="Go to Add Category" />
    </form>
    </div>

    <div id="kanan" style="display:inline-block">
    <form action="writer.php">
        <input id="kanan" type="submit" value="Go to Add Writer " />
    </form>
    </div>

<h1>Nama Penulis</h1>
    <form action="" method="post">
    <p> Nama Penulis :	<input type="text" name="penulis"> </p>
    	<input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>

    <?php
    if (isset($_POST['penulis'])) {

    	$connect = mysqli_connect('localhost', 'root', '', 'dumblibrary');
    	$query = mysqli_query($connect, "INSERT INTO writername_tb (`writer`) VALUES ('".$_POST['penulis']."')");

    	header('Location: index.php');
    }
