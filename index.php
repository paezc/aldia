<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Día IA</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="container text-center">
        <div class="search-box">
            <h1>AldIA</h1>
            <p class="tagline">Un directorio de IAs... porque el futuro ya llegó, pero no sabemos bien qué hacer con él.</p>
            <div class="search-container">
                <input type="text" id="search-input" class="form-control" placeholder="Busca una IA...">
                <button id="search-button" class="btn btn-primary">Buscar</button>
            </div>
        </div>

        <!-- Carrusel de resultados -->
        <div id="results-container"></div>

    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/buscador.js"></script>
</body>
</html>
