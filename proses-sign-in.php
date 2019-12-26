 <?php  
 session_start();
  include "koneksi.php";

      $Email  = $_POST['Email'];
      $Password = $_POST['Password'];


      $signin  = mysqli_query($koneksi,"SELECT * FROM user WHERE alamat_email= '$Email' AND password ='$Password'");

      if (mysqli_num_rows($signin) > 0){
		  $_SESSION['Email'] = $Email;
		  $_SESSION['login'] = 'login';
		  header("location:index.php");
	  }else{
	  	echo "login gagal";
	  }
 ?>
 