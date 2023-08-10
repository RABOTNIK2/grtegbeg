
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$bd="test";
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
    <div class="basa2">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
              <img src="img/pie.png" class="picsa"><span class="text-light">Блог плохих рецептов</span>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="./profile.php">  Профиль</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-light" href="./dishes.php">Рецепты</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="fkusnotisha">
            <div class="info1">
                <div class="photoshop">
                    <img src="img/1649921183_32-kartinkof-club-p-rzhachnie-kartinki-starie-babki-33.jpg" class="ludy">
                    <h5 class="text-light">Людмила Вход</h5>
                </div>
                <div>
                    <h5 class="text-light">Дата публикации</h5>
                </div>
            </div>
            <div class="needed_food">
                <h5 class="text-light">Интригующая тема </h5>
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perferendis, dolor vero quaerat, minima temporibus, iste dolore error nihil quas sequi pariatur laudantium doloremque cum libero sunt officiis deserunt voluptate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam obcaecati, quis minus libero itaque nemo! Id et officiis, dolores ratione labore iusto officia vitae sunt consequuntur, maiores, doloremque porro aperiam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur facere qui perspiciatis, odit pariatur deserunt voluptatibus dolore nesciunt dolor quasi et id dolorem! Laborum voluptate numquam, consequatur vel similique commodi.</p>
            </div>
            <div class="crasaucik">
                <h5 class="text-light">Комментарии</h5>
                <div class="background_stuff"></div>
                <div class="comments">
                    <div class="maket">
                        <div class="poleno">
                            <img src="img/1649921183_32-kartinkof-club-p-rzhachnie-kartinki-starie-babki-33.jpg" class="ludy">
                            <h5 class="text-light">Людмила Вход</h5>
                        </div>
                        
                        <p class="text-light" id="nabor_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur molestias, reiciendis odio dignissimos laboriosam maxime quas enim blanditiis culpa aperiam tenetur, provident quam iste ipsa sapiente earum. Excepturi, magnam ipsum?</p>
                    </div>
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
    <div class="basa2">
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
        <div class="fkusnotisha">
            <div class="info1">
                <div class="photoshop">
                    <img src="img/1649921183_32-kartinkof-club-p-rzhachnie-kartinki-starie-babki-33.jpg" class="ludy">
                    <h5 class="text-light">Людмила Вход</h5>
                </div>
                <div>
                    <h5 class="text-light">Дата публикации</h5>
                </div>
            </div>
            <div class="needed_food">
                <h5 class="text-light">Интригующая тема </h5>
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perferendis, dolor vero quaerat, minima temporibus, iste dolore error nihil quas sequi pariatur laudantium doloremque cum libero sunt officiis deserunt voluptate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam obcaecati, quis minus libero itaque nemo! Id et officiis, dolores ratione labore iusto officia vitae sunt consequuntur, maiores, doloremque porro aperiam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur facere qui perspiciatis, odit pariatur deserunt voluptatibus dolore nesciunt dolor quasi et id dolorem! Laborum voluptate numquam, consequatur vel similique commodi.</p>
            </div>
            <div class="crasaucik">
                <h5 class="text-light">Комментарии</h5>
                <div class="background_stuff"></div>
                <div class="comments">
                    <div class="maket">
                        <div class="poleno">
                            <img src="img/1649921183_32-kartinkof-club-p-rzhachnie-kartinki-starie-babki-33.jpg" class="ludy">
                            <h5 class="text-light">Людмила Вход</h5>
                        </div>
                        
                        <p class="text-light" id="nabor_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur molestias, reiciendis odio dignissimos laboriosam maxime quas enim blanditiis culpa aperiam tenetur, provident quam iste ipsa sapiente earum. Excepturi, magnam ipsum?</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>
<? } ?>
