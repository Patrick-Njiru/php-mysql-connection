<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  // server name, type of user, password, db name
  $conn = mysqli_connect('localhost', 'root', '', 'test1') or die('Connection Failed:' . mysqli_connect_error());

  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bgroup = $_POST['bgroup'];

    // use backticks, single quotation marks will cause an error

    $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `bgroup`) VALUES (`$name`, `$email`, `$phone`, `$bgroup`)";
    $query = mysqli_query($conn, $sql);
    if($query) echo 'Entry Successfull';
    else echo 'Error Occurred';
  }
}
