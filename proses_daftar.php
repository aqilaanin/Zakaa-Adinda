<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_pjbl";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
;
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
;


if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
  $sql = "SELECT * FROM `tbl_user` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) == 0) {
    $sql2 =
      "INSERT INTO `tbl_user` (`username`, `email`, `password`) VALUES
('$_POST[username]', '$_POST[email]', '$_POST[password]')";
    $result2 =
      $conn->query($sql2);
    if ($result2) {
      header('location: http://localhost/pjbl_pas/login/loginpage.php');
    } else {
      echo '
<script>
  alert("Request failed to send, please try again");
</script>
';
    }
  } else {
    echo '
<script>
  alert("Nama/Email sudah dipakai, silahkan menggunakan yang lain");
</script>
';
  }
} ?>
