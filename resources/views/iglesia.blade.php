<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iglesia</title>
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

<!-- HERO -->
<section style="min-height:320px; background:url('{{ asset('images/banner.jpeg') }}') center/cover; display:flex; align-items:center; padding:40px 60px;">
    <div style="color:white; max-width:600px;">
        <h1 class="fw-bold" style="font-size:2.5rem; text-shadow:1px 1px 4px rgba(0,0,0,0.6);">BIENVENIDO A CASA</h1>
        <p class="mt-2" style="text-shadow:1px 1px 3px rgba(0,0,0,0.5);">Somos una comunidad que cree en un Dios vivo, que transforma corazones y nos invita a caminar juntos en fe.</p>
        <p style="text-shadow:1px 1px 3px rgba(0,0,0,0.5);">Aquí encontrarás un espacio para crecer, sanar, servir y descubrir tu propósito, rodeado de personas que te acompañan en cada etapa de tu vida.</p>
        <button class="btn mt-2" style="background:#5aa0be;color:white;">Descubre nuestra comunidad</button>
    </div>
</section>

<!-- MAIN -->
<main class="container-lg py-5">

    <!-- SOBRE NOSOTROS -->
    <div class="row align-items-center p-4 rounded-4 mb-4" style="background:#b7d3df;">
        <div class="col-md-6">
            <h2 class="fw-bold mb-3" style="letter-spacing:3px;">SOBRE NOSOTROS</h2>
            <p style="font-size:14px;line-height:1.6;">Somos una comunidad de fe que cree en el poder transformador del evangelio de Cristo, con el corazón puesto en alcanzar y restaurar a las familias a través de la presencia de Dios y la guía del Espíritu Santo.</p>
            <p style="font-size:14px;line-height:1.6;">Nos reunimos para adorar, orar, alabar y compartir la palabra de Dios, conscientes de que cada persona tiene un propósito y una historia única. ¡Será un gusto conocerte y caminar contigo en este camino de fe!</p>
            <button class="btn" style="background:#5aa0be;color:white;">ÚNETE</button>
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
            <img src="{{ asset('images/img3.jpeg') }}" alt="" class="img-fluid rounded-3" style="max-height:300px;width:100%;object-fit:cover;">
        </div>
    </div>

    <!-- GALERIA -->
    <div class="row g-2 mb-4">
        <div class="col-6 col-md-3"><img src="{{ asset('images/img2.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
        <div class="col-6 col-md-3"><img src="{{ asset('images/img1.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
        <div class="col-6 col-md-3"><img src="{{ asset('images/devocionales.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
        <div class="col-6 col-md-3"><img src="{{ asset('images/predicas.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
    </div>

    <!-- PALABRA RHEMA -->
    <div class="row align-items-center p-4 rounded-4 mb-4" style="background:#b7d3df;">
        <div class="col-md-6 mb-3 mb-md-0">
            <img src="{{ asset('images/img1.jpeg') }}" alt="Gran Comisión" class="img-fluid rounded-3" style="max-height:250px;width:100%;object-fit:cover;">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-3" style="letter-spacing:3px;">PALABRA RHEMA 2026</h2>
            <p style="font-size:14px;line-height:1.6;">La historia y el llamado de nuestro ministerio, fundamentado en la misión de predicar el evangelio y hacer discípulos, tal como Jesús nos instruye en Mateo 28:19, versículo que ha marcado la identidad de nuestra denominación desde sus inicios.</p>
            <p style="font-size:14px;line-height:1.6;">Este llamado ha sido el motor que nos impulsa a llevar la Palabra de Dios a cada lugar y a cada generación.</p>
        </div>
    </div>

</main>

<!-- FOOTER -->
<footer style="background:#6b4e3e;color:white;padding:25px 60px;" class="d-flex justify-content-between align-items-center flex-wrap gap-3">
    <div style="letter-spacing:1px;font-size:12px;">REDES SOCIALES</div>
    <div><img src="{{ asset('images/logo.PNG') }}" style="width:45px;height:45px;border-radius:50%;background:white;padding:5px;"></div>
    <div class="text-end" style="font-size:12px;line-height:1.4;">
        <p class="mb-0">En Sierra Mojada 3, Saltillo Coahuila</p>
        <p class="mb-0">Saltillo, Coahuila, México</p>
        <p class="mb-0">Casa MSI 2026</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
