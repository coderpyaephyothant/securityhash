<!-- set cookie and unset cookie -->
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
unset($_COOKIE['remember_user']);
setcookie('remember_user', null, -1, '/');
 ?>
