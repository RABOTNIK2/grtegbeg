
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
if($_SESSION["auth"] == true){?>
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
    <div class="basa">
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
        <div class="recept">
            <div class="col-2" id="zagalovok2">
                <h3 class="text-light">Обсуждение</h3>
                
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                  Филтьры
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">По популярности</a></li>
                  <li><a class="dropdown-item" href="#">Новые</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="sami_recepty">
                <div class="pictures">
                    <div class="fotocki">
                        <img src="img/1649921183_32-kartinkof-club-p-rzhachnie-kartinki-starie-babki-33.jpg" class="ludy">
                        <h5 class="text-light">Людмила Вход</h5>
                    </div>
                    
                </div>
                <div class="description">
                    <h4 class="text-light">Название обсуждения</h4>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, mollitia beatae dignissimos quibusdam ex tempore inventore ducimus reiciendis pariatur accusantium natus cumque atque nisi fugiat nobis quod obcaecati deserunt qui.</p>
                    <a class="btn btn-outline-light" href="./argue_exstra.php" role="button">Комменты</a>
                </div>
            </div>
        </div>
        
    </div>
    

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>
<? }else{ ?>
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
    <div class="basa">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
              <img src="img/pie.png" class="picsa"><span class="text-light">Блог плохих рецептов</span>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="./registration.php">Вход</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-light" href="./dishes.php">Рецепты</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="recept">
            <div class="col-2" id="zagalovok2">
                <h3 class="text-light">Обсуждение</h3>
                
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                  Филтьры
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">По популярности</a></li>
                  <li><a class="dropdown-item" href="#">Новые</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="sami_recepty">
                <div class="pictures">
                    <div class="fotocki">
                        <img src="img/1649921183_32-kartinkof-club-p-rzhachnie-kartinki-starie-babki-33.jpg" class="ludy">
                        <h5 class="text-light">Людмила Вход</h5>
                    </div>
                    
                </div>
                <div class="description">
                    <h4 class="text-light">Название обсуждения</h4>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, mollitia beatae dignissimos quibusdam ex tempore inventore ducimus reiciendis pariatur accusantium natus cumque atque nisi fugiat nobis quod obcaecati deserunt qui.</p>
                    <a class="btn btn-outline-light" href="./argue_exstra.php" role="button">Комменты</a>
                </div>
            </div>
        </div>
        
    </div>
    

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>
<? } ?>
