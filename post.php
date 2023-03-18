<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $ddd = $_POST['ddd'];
    $telefone = $_POST['telefone'];




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="public/img/formicon.png" type="image/x-icon">

</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Resultado Curriculo</a></li>
        </ul>
    </nav>
  <br>

  <div class="card3">
    <img src="img/user.png" alt="userpg">
        <h3><?php echo $nome ?></h3>
        <h4 href="#"><?php echo $email ?></h4>
<br>
        <p>(<?php echo $ddd; echo ") ";  echo $telefone ?></p> 

        <?php
          if($nome == '' || $email == '' || $telefone == '' | $ddd == ''){ 
                echo 'Preencha à todos os dados!';
            }
        ?>
    </div>



  <div class="cardinfos">

    <div class="container2">

        </div>
    </div>
</body>
</html>