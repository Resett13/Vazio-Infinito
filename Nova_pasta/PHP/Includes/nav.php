<link rel="stylesheet" href="../estilo/nav.css">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <!-- Botão de abrir o menu lateral -->
        <button type="button" id="openBtn" class="btn btn-link text-light me-2" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>

        <a class="navbar-brand" href="./principal.php">MarketRecycla</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="principal.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Procurando por?
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Plástico</a></li>
                        <li><a class="dropdown-item" href="#">Vidro</a></li>
                        <li><a class="dropdown-item" href="#">Metal</a></li>
                        <li><a class="dropdown-item" href="#">Papel</a></li>
                        <li><a class="dropdown-item" href="#">Eletrônicos</a></li>
                    </ul>
                </li>
            </ul>

            <form class="d-flex" role="search" style="width: 45%; display: flex; align-items: center; position: relative;">
                <div class="input-group" style="flex: 1;">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="margin-right: 10px;">
                    <span class="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 13 13">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </span>
                </div>
                <button class="btn btn-outline-success" type="submit" style="width: 80px;">Buscar</button>
            </form>

            <button type="button" class="btn btn-link text-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
            </button>

            <a href="./cadastro.php">
                <button type="button" class="btn btn-link text-light ms-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </button>
            </a>
        </div>
    </div>
</nav>

<!-- Menu Lateral -->
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
</main>

<!-- Script para abrir e fechar o menu lateral -->
<script src="../../js/javaScript.js"></script>


