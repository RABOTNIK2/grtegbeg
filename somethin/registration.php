<?php
  session_start();
  $host="localhost";
  $user="root";
  $pass="";
  $bd="bgtbt";
  
  $link=mysqli_connect($host, $user, $pass, $bd );
  mysqli_query($link,"SET NAMES 'utf8'");
  function validation($log,$passs){
    urldecode($passs);
    strip_tags($passs);
    htmlspecialchars($passs);
    urldecode($log);
    strip_tags($log);
    htmlspecialchars($log);

  }
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  $login = $_POST['login'];
  $query = "SELECT * FROM users WHERE login='$login'"; // получаем юзера по логину
  $res = mysqli_query($link, $query);
  $user = mysqli_fetch_assoc($res);

 if (!empty($_POST['password']) and !empty($_POST['login'])) {
     $login = $_POST['login'];
     $password = $_POST['password'];
     validation($login,$password);
     
     $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    //  $res = mysqli_query($link, $query);
    //  $user = mysqli_fetch_assoc($res);
     if (!empty($user)) {
         $hash = $user['password']; // соленый пароль из БД
         
        if (password_verify($_POST['password'], $hash)) {
            echo "всё ок авторизируем";
        
        } else {
            echo "пароль не подошёл сообщим об этом";
        }
     } else {
        echo "пользователя с таким логином нет";

     }
 
     if (!empty($user)) {
        $_SESSION['auth'] = true;
        header("Location: ./kyrsov.php");
     } else{
        // неверно ввел логин или пароль

     }
     
    }
  
  

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="bg-warning" id="p123">
    
    <div class="registration_window">
      <h3 class="text-light">Вход на сайт</h3>
      <form action="" method="POST">
        <input name="login" type="text" class="form-control" placeholder="Имя"><br>
        <input name="password" type="password" class="form-control" placeholder="Пароль"><br>
        <div class="grouppp">

          <button type="submit" class="btn btn-outline-light" id="vasy">Войти</button>
          <a class="btn btn-outline-light" href="./registrato.php" role="button">Зарегистрироваться</a>

        </div>
        
      </form>
      
    </div>

  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>