<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reuniones</title>
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
<section style="height:250px; background:url('{{ asset('images/banner.jpeg') }}') center/cover; display:flex; align-items:center; justify-content:center;">
    <h1 class="fw-bold text-white" style="font-size:3rem; letter-spacing:4px; text-shadow:1px 1px 4px rgba(0,0,0,0.6);">HORARIOS</h1>
</section>

<!-- MAIN -->
<main class="container-lg py-5">

    <!-- HORARIOS CARDS -->
    <div class="row justify-content-center g-3 mb-3">
        <div class="col-10 col-sm-4 col-md-3">
            <div class="text-center p-4 rounded-4" style="background:#b7d3df;">
                <h3 class="fw-bold" style="color:#5b4638;">Lunes</h3>
                <p class="mb-0">19:00 – 20:00 hrs</p>
            </div>
        </div>
        <div class="col-10 col-sm-4 col-md-3">
            <div class="text-center p-4 rounded-4" style="background:#b7d3df;">
                <h3 class="fw-bold" style="color:#5b4638;">Miércoles</h3>
                <p class="mb-0">7:00 – 12:00 hrs</p>
            </div>
        </div>
        <div class="col-10 col-sm-4 col-md-3">
            <div class="text-center p-4 rounded-4" style="background:#b7d3df;">
                <h3 class="fw-bold" style="color:#5b4638;">Domingo</h3>
                <p class="mb-0">9:30 – 13:00 hrs</p>
            </div>
        </div>
    </div>
    <div class="text-center mb-5" style="font-size:14px;">
        <p>Martes, Jueves, Viernes y Sábado <strong>se encuentra cerrado.</strong></p>
    </div>

    <!-- UBICACIÓN -->
    <div class="row align-items-center p-4 rounded-4 mb-4" style="background:#b7d3df;">
        <div class="col-md-5 mb-3 mb-md-0">
            <h2 class="fw-bold mb-3" style="letter-spacing:3px;">UBICACIÓN</h2>
            <p style="font-size:14px;line-height:1.6;">
                Emiliano Zapata, 8 de Agosto de 1879 Esq,<br>
                Lazaro Cardenas, 54870 Cuautitlán, Méx.,<br>
                Cuautitlán, Mexico, 54870
            </p>
            <button class="btn" style="background:#5aa0be;color:white;">VER MÁS</button>
        </div>
        <div class="col-md-7">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.123456789!2d-99.17!3d19.65!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDM5JzAwLjAiTiA5OcKwMTAnMTIuMCJX!5e0!3m2!1ses!2smx!4v1234567890"
                width="100%" height="220"
                style="border:0;border-radius:12px;"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- GALERIA -->
    <div class="row g-2">
        <div class="col-6 col-md-3"><img src="{{ asset('images/img1.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
        <div class="col-6 col-md-3"><img src="{{ asset('images/img2.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
        <div class="col-6 col-md-3"><img src="{{ asset('images/img3.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
        <div class="col-6 col-md-3"><img src="{{ asset('images/predicas.jpeg') }}" class="img-fluid rounded-3" style="height:160px;width:100%;object-fit:cover;"></div>
    </div>

</main>

<!-- FOOTER -->
<footer style="background:#6b4e3e;color:white;padding:25px 60px;" class="d-flex justify-content-between align-items-center flex-wrap gap-3">
    <div style="letter-spacing:1px;font-size:12px;">REDES SOCIALES</div>
    <div><img src="{{ asset('images/logo.PNG') }}" style="width:45px;height:45px;border-radius:50%;background:white;padding:5px;"></div>
    <div class="text-end" style="font-size:12px;line-height:1.4;">
        <p class="mb-0">Emiliano Zapata 8, 6 de agosto de 1878 Esq</p>
        <p class="mb-0">54870 Cuautitlán, Estado de México</p>
        <p class="mb-0">Cel: 55 1825 3264</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
