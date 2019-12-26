 <?php

      include "koneksi.php";

      $Nama  = $_POST['Nama'];
      $Email  = $_POST['Email'];
      $Alamat  = $_POST['alamat'];
      $Password = $_POST['Password'];

      $mysqli  = "INSERT INTO user VALUES ('','$Nama', '$Email', '$Alamat','$Password')";
      $result  = mysqli_query($koneksi, $mysqli);
      if ($result) {
        echo "sign up berhasil";
        header("localtion:form-sign-in.php ")
      } else {
        echo "sign up gagal";
      }
      mysqli_close($koneksi);
    ?>
    