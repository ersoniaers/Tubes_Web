
<html>
<head>
  <title> Cek Hasil CAPTCHA </title>
</head>
	<body>
	  <p align="center"> Hasil Login <br/>
	<?php
	    //memanggil lagi session untuk dimulai 
	    session_start();
	    if($_SESSION["Captcha"]!=$_POST["nilaiCaptcha"]){
		    echo " Email anda ".$_POST["Email"]; echo "<br />";
		    echo "Kode Captcha Anda Salah";
			}else{ // jika teryata lolos
			echo "Email anda ".$_POST["Email"] ; echo "<br/>";
			echo "Kode Captcha Anda Benar";
			}
	?>
	  </p>
	</body>
</html>