
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="assets/css/global.css">
</head>
<body>
<?php


if (isset($_POST["send"])) {
  require_once "classes/GetDatas.php";
  $register = new GetDatas($_POST["name"],$_POST["email"]);
  echo "<style> .sucess{display: none;}</style>";
}

if (isset($_GET["sucess"])) {
  if ($_GET["sucess"]=="hya") {
    echo "<div class='sucess' > Dados enviados com sucessso </div>";
  }
}

?>


 <form  method="POST">
    <h2>Marcar Agenda</h2>
    <div class="imput-control">
        <label for="text">Nome:</label>
            <input type="text" name="name" value="<?php if (isset($_POST["name"])) { echo $_POST["name"]; }  ?>">
    </div>

    <div class="imput-control">
    <label for="text">Email:</label>
            <input type="text" name="email" value="<?php if (isset($_POST["email"])) { echo $_POST["email"]; }  ?>" >
    </div>
    <div class="imput-control center">
           <input type="submit" name="send" value="Enviar">
    </div>
 
 </form>

 <script src="assets/js/"></script>

</body>
</html>