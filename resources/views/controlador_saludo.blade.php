<!DOCTYPE html>
<html>
<head>
    <title>Saludo desde Controlador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="alert alert-danger text-center">
            <h2>Hace tiempo que no te veo, {{ $nombre }}</h2>
            <a href="/" class="btn btn-outline-danger mt-3">Volver</a>
        </div>
    </div>
</body>
</html>