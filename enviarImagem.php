<?php
    include('./includes/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="icon" href="images/icon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e6ad2c2d66.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Galeria</title>
</head>
<body>
    <nav>
        <div class="menu">
         <h1>Galeria</h1>
         <div class="search">
            <a href="index.php">
                <button>
                    Voltar para o Inicio
                </button>
            </a>
        </div>
         </div>
        </div>
    </nav>
        <div class="container">
            <div class="upload">
                <img src="./images/upload-imagem.png" alt="Upload de Imagem"/>
                <span>Colabore com sua imagem!</span>
            </div>
            <div class="form">
                <form action="./includes/cadastrarImagem.php" enctype="multipart/form-data" method="POST">
                    <input type="file" name="arquivo" id="arquivo" required/>
                    <input type="text" name="descIMG" id="descIMG" placeholder="Descrição da imagem" required/>
                    <input type="submit" value="Enviar imagem">
                </form>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>