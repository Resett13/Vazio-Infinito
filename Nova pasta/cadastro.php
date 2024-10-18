<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
<header>
    <?php include("./nav.php");?>
    </header>

    <main>

        <div class="container">
            <div class="row justify-content-center" style="margin-top: 100px;">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Cadastro</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="name" placeholder="Insira seu nome" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Insira seu email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="password" placeholder="Insira sua senha" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirmar Senha</label>
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme sua senha" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <a href="login.html">Já tem uma conta? Faça login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Adicionando o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="javaScript.js"></script>
</body>
</html>
