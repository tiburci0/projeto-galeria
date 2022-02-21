<?php
    include('./includes/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
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
            <a href="enviarImagem.php">
                <button>
                    Envie sua imagem
                </button>
            </a>
        </div>
         </div>
        </div>
    </nav>

    <main class="gallery">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM imagens");
        while($buscar = mysqli_fetch_assoc($sql)){
        ?>
        <div class="imagens">
            <img src="./images/uploads/<?php echo $buscar['imagem']; ?>"/>
        </div>
        <?php
        }
        ?>
      </div>
    </main>
    <footer>
        <div class="title">
            Criado com ❤️ por Matheus Tiburcio
        </div>
        <div class="sociais">
            <a href="http://github.com/tiburci0">
             <button>
             <i class="fa-brands fa-github"></i>
             </button>
             </a>

            <a href="https://www.instagram.com/tiburso.jpg/">
             <button>
             <i class="fa-brands fa-instagram"></i>
             </button>
            </a>
            <a href="https://fb.com/Theus.tiburcio">
             <button>
             <i class="fa-brands fa-facebook-f"></i>
             </button>
            </a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>