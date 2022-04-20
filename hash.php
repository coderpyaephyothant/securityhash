<!-- password hash sample -->

password_hash('password',PASSWORD_DEFAULT);
password_verify($password,$user['password']);
