
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



    <h1>Add Book</h1>
    <form action="" method="post" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td>Nama Buku</td>
          <td>:</td>
    			<td><input type="text" name="name" id="name"><br></td>
    		</tr>
    		<tr>
    			<td>Id Penulis</td>
          <td>:</td>
    			<td><input type="text" name="writer_id" id="writer_id"><br></td>
    		</tr>
        <tr>
    			<td>Kategori Id</td>
          <td>:</td>
    			<td><input type="text" name="category_id" id="category_id"><br></td>
    		</tr>
    		<tr>
    			<td>Tahun Publikasi</td>
          <td>:</td>
    			<td><input type="text" name="Publication_year" id="Publication_year"></td>
    		</tr>
        <tr>
          <td>Gambar Buku</td>
          <td>:</td>
          <td><input type="file" name="img" id="img"></td>
        </tr>
        <div style="display:inline-block">
    		<tr>
    			<td></td>
    			<td><p><input  type="submit" name="submit" value="submit"></p></td>
    		</tr>
      </div>

    	</table>
    </form>



  </body>
</html>


<?php
if (isset($_POST['submit'])) {


  $connect = mysqli_connect('localhost', 'root', '', 'dumblibrary');


  $image = $_FILES['img']['name'];


  $query = mysqli_query($connect, "INSERT INTO book_tb (`name`, `writer_id`,`category_id`, `Publication_year`, `img`) VALUES ('".$_POST['name']."','".$_POST['writer_id']."','".$_POST['category_id']."','".$_POST['Publication_year']."','".$image."')");

  header('Location: index.php');
}
?>
