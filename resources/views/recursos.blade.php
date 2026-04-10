<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recursos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/Styles.css') }}">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background:#e9e4db; padding:12px 40px;">
    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/iglesia') }}">
        <img src="{{ asset('images/logo.PNG') }}" alt="logo" style="width:40px;height:40px;border-radius:50%;">
        <div class="logo-text">
            <span>MINISTERIOS SALEM</span>
            <span>INTERNACIONAL MÉXICO</span>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <div class="navbar-nav gap-3">
            <a class="nav-link fw-bold" style="color:#5b4638;letter-spacing:1px;" href="{{ url('/iglesia') }}">IGLESIA</a>
            <a class="nav-link fw-bold" style="color:#5b4638;letter-spacing:1px;" href="{{ url('/reuniones') }}">REUNIONES</a>
            <a class="nav-link fw-bold" style="color:#5b4638;letter-spacing:1px;" href="{{ url('/ministerios') }}">MINISTERIOS</a>
            <a class="nav-link fw-bold" style="color:#5b4638;letter-spacing:1px;" href="{{ url('/recursos') }}">RECURSOS</a>
            <a class="nav-link fw-bold" style="color:#5b4638;letter-spacing:1px;" href="{{ url('/contacto') }}">CONTACTO</a>
        </div>
    </div>
</nav>

<!-- HERO RECURSOS -->
<section style="min-height:220px; background:url('{{ asset('images/recursos-banner.jpeg') }}') center/cover; display:flex; align-items:center; justify-content:center; margin:20px 40px; border-radius:20px; overflow:hidden;">
    <h1 class="fw-bold text-white" style="font-size:3rem;letter-spacing:4px;text-shadow:1px 1px 4px rgba(0,0,0,0.6);">RECURSOS</h1>
</section>

<!-- CONTENIDO -->
<main class="container-lg pb-5">

    <!-- DEVOCIONALES -->
    <div class="position-relative rounded-4 mb-4 overflow-hidden" style="min-height:220px; background:url('{{ asset('images/devocionales.jpeg') }}') center/cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);border-radius:inherit;"></div>
        <div class="position-relative p-4 p-md-5" style="width:min(100%, 500px); color:white;">
            <h2 class="fw-bold mb-2" style="letter-spacing:3px;">DEVOCIONALES</h2>
            <p style="font-size:14px;line-height:1.5;">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <button class="btn" style="background:#6fa8c7;color:white;">VER MÁS</button>
        </div>
    </div>

    <!-- EVENTOS -->
    <div class="position-relative rounded-4 mb-4 overflow-hidden" style="min-height:220px; background:url('{{ asset('images/eventos.jpeg') }}') center/cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);border-radius:inherit;"></div>
        <div class="position-relative p-4 p-md-5 ms-auto text-end" style="width:min(100%, 500px); color:white;">
            <h2 class="fw-bold mb-2" style="letter-spacing:3px;">EVENTOS</h2>
            <p style="font-size:14px;line-height:1.5;">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
            <button class="btn" style="background:#6fa8c7;color:white;">VER MÁS</button>
        </div>
    </div>

    <!-- PREDICAS -->
    <div class="position-relative rounded-4 mb-4 overflow-hidden" style="min-height:220px; background:url('{{ asset('images/predicas.jpeg') }}') center/cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);border-radius:inherit;"></div>
        <div class="position-relative p-4 p-md-5" style="width:min(100%, 500px); color:white;">
            <h2 class="fw-bold mb-2" style="letter-spacing:3px;">PREDICAS</h2>
            <p style="font-size:14px;line-height:1.5;">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
            <button class="btn" style="background:#6fa8c7;color:white;">VER MÁS</button>
        </div>
    </div>

</main>

<!-- FOOTER -->
<footer style="background:#6b4e3e;color:white;padding:25px 60px;" class="d-flex justify-content-between align-items-center flex-wrap gap-3">
    <div style="letter-spacing:1px;font-size:12px;">REDES SOCIALES</div>
    <div><img src="{{ asset('images/logo.PNG') }}" style="width:45px;height:45px;border-radius:50%;background:white;padding:5px;"></div>
    <div class="text-end" style="font-size:12px;line-height:1.4;">
        <p class="mb-0">Emiliano Zapata 8, 6 de agosto de 1978 Esq</p>
        <p class="mb-0">54870 Cuautitlán, Estado de México</p>
        <p class="mb-0">Cel: 55 1825 3264</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
