<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$bd="htth";
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$link=mysqli_connect($host, $user, $pass, $bd );
mysqli_query($link,"SET NAMES 'utf8'");
function validation1($log,$passs,$classs){
    urldecode($passs);
    strip_tags($passs);
    htmlspecialchars($passs);
    urldecode($log);
    strip_tags($log);
    htmlspecialchars($log);
    urldecode($classs);
    strip_tags($classs);
    htmlspecialchars($classs);

  }

if(!empty($_POST)){
    $zagalovok = $_POST['zagalovok'];
    $incridients = $_POST['incridients'];
    $cookin_steps = $_POST['cookin_steps'];
    validation1($zagalovok,$incridients,$cookin_steps);

    $query = "SELECT * FROM publication WHERE zagalovok='$zagalovok'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));
    if (empty($user)) {
        $query = "INSERT INTO publication SET zagalovok='$zagalovok', incridients='$incridients', cookin_steps='$cookin_steps' ";
        mysqli_query($link, $query);
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
           
    } else {
        echo "логин занят , выведем сообщение об этом";
          
    }
    // $query = "INSERT INTO publication SET zagalovok='$zagalovok', incridients='$incridients', cookin_steps='$cookin_steps' ";
    // mysqli_query($link, $query);


    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

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

  <div class="based_div">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
              <img src="img/pie.png" class="picsa"><span class="text-light">Блог плохих рецептов</span>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="./profile.php">Профиль</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-light" href="./dishes.php">Рецепты</a>
                  </li>
                </ul>
              </div>
            </div>
    </nav>
    <div class="container12">
        <div class="jopa">
            <img src="img/dummy-profile-image-male.jpg" class="functional">

        </div>
        <div class="colonna">
           <form action="" method="POST" class="addin">
              <input name="zagalovok" type="text" class="form-control" placeholder="Название блюда"><br>
              <input name="incridients" type="text" class="form-control" placeholder="Ингридиенты"><br>
              <input name="cookin_steps" type="text" class="form-control" placeholder="Как это готовить"><br>
              <button type="submit" class="btn btn-outline-light" id="vasy32">Отправить</button>     
           </form>

        </div>

    </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>