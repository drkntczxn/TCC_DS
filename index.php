<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <title>Ótica Fany</title>
</head>

<body>

    <header class="site-header">
        <h1>Ótica Fany</h1>
        <a class="btn" href="produtos.html">Produtos</a>
        <a class="btn" href="telaLogin.php">Login</a>
    </header>


    <main>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="imagens/carousel1.jpg" class="d-block w-100" alt="carousel2.jpg">
                </div>

                <div class="carousel-item">
                    <img src="imagens/carousel2.jpg" class="d-block w-100" alt="carousel3.jpg">
                </div>

                <div class="carousel-item">
                    <img src="imagens/carousel3.jpg" class="d-block w-100" alt="carousel1.jpg">
                </div>

            </div>

            <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

    </main>

</body>
</html>