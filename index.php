<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Giriş yap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
    <div class="login-screen">
        <div class="app-title">
        <h1>Giriş yap</h1>
</div>
<form action ="islem.php" method="post">
<div class="login-form">
    <div class="control-group">
        <input type="text" name="username" class="login-field" placeholder="Kullanıcı adı" id="login-name>
        <label class="login-field-icon fui-user" for="login-name"></label>

</div>
<div class="control-group">
    <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
    <label class="login field-icon fui-user" for="login-pass"></label>

</div>
</div>
<button href="index.php" name="giris" class="btn btn-primary btn-large btn-block">giriş yap</button>

</form>
<a  href="kayit.php"><button class="btn btn-primary btn-large btn-block">kayıt ol</button></a>
</div>
</div>

</body>
</html>