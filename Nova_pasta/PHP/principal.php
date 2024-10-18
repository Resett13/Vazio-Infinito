<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilo/principal.css"> <!-- Link para seu CSS -->
    <title>MarketRecycla</title>
</head>
<body>
    <header>
    <?php include("./Includes/nav.php");?>

    </header>
    
    <main class="content">
        <div id="menuContainer" class="menu-container" style="display: none;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-dark text-white shadow-item-hover">An item</li>
                <li class="list-group-item bg-dark text-white shadow-item-hover">A second item</li>
                <li class="list-group-item bg-dark text-white shadow-item-hover">A third item</li>
                <li class="list-group-item bg-dark text-white shadow-item-hover">A fourth item</li>
                <li class="list-group-item bg-dark text-white shadow-item-hover">And a fifth one</li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="d-flex no-gutters">
                <div class="image-container">
                    <img src="../imagens/Plastico.png" alt="Imagem de Plástico" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="caption">Plástico</div>
                </div>
                <div class="image-container">
                    <img src="../imagens/Vidro.png" alt="Imagem de Vidro" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="caption">Vidro</div>
                </div>
                <div class="image-container">
                    <img src="../imagens/Metal.png" alt="Imagem de Metal" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="caption">Metal</div>
                </div>
                <div class="image-container">
                    <img src="../imagens/Papel.png" alt="Imagem de Papel" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="caption">Papel</div>
                </div>
                <div class="image-container">
                    <img src="../imagens/Eletronicos.png" alt="Imagem de Eletrônicos" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="caption">Eletrônicos</div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/javaScript.js"></script>

</body>
</html>
