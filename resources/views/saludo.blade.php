<!DOCTYPE html>
<html>
<head>
    <title>Saludo Personalizado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="alert alert-success text-center">
            <h2>¡Que gusto verte {{ $nombre }}!</h2>
            <a href="/" class="btn btn-outline-success mt-3">Volver</a>
        </div>
    </div>
</body>
</html>