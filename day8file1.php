<?php
require 'connect.inc.php';
$user_ip = $_SERVER['REMOTE_ADDR'];
$connection = mysqli_connect('localhost','root','','adatbase');

function ip_exists($ip) {
  global $user_ip;
  echo $user_ip;
}
function update_count() {
  $connection = mysqli_connect('localhost','root','','adatbase');
  $query = "SELECT `count` FROM `hits_count`";
  if($query_run = mysqli_query($connection, $query))  {
      $count = mysql_result($query_run);
    $count_inc = $count + 1;
    
    $query_update = "UPDATE `hits_count` SET `count` = '$count_inc'";
    if(@$query_update_run = mysqli_query($connection,$query_update)) {
      echo 'OK';
    }
  }

}
update_count();

?>