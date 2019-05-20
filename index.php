<head>
<title>XML Parsing</title>
<link rel="stylesheet" href="bootstrap.min.css" />
</head>
<body bgcolor="#F0F8FF">
	<h2 style="color: black">Tugas Teknologi WEB - XML Parsing</h2>
<?php
if(isset($_POST['submit'])) {
$data=simplexml_load_file('data.xml');
$data->item->nama=$_POST['nama'];
$data->item->nim=$_POST['nim'];
$data->item->email=$_POST['email'];
$handle=fopen("data.xml","wb");
fwrite($handle,$data->asXML());
fclose($handle);
}

$data=simplexml_load_file('data.xml');
$nama=$data->item->nama;
$nim=$data->item->nim;
$email=$data->item->email;
?>

<table>
<tr><td>Nama Lengkap</td><td>: <?php echo $nama ?></td></tr>
<tr><td>Nim</td><td>: <?php echo $nim ?></td></tr>
<tr><td>Email</td><td>: <?php echo $email ?></td></tr>
</table>
<br>
<form method="post">
<table>
  <tr><td>Nama Lengkap </td><td><textarea class="textarea" name="nama"><?php echo $nama ?></textarea></td></tr>
  <tr><td>Nim </td><td><textarea class="textarea" name="nim"><?php echo $nim ?></textarea></td></tr>
  <tr><td>Email </td><td><textarea class="textarea" name="email"><?php echo $email ?></textarea></td></tr>
</table>
<input type="submit" name="submit" class="button" value="Update">
</form>
<button class="button" onclick="window.location.href='data.xml'">Data XML</button>
</body>	