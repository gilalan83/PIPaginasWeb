<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ministerios</title>
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
    <h1 class="fw-bold text-white" style="font-size:3rem; letter-spacing:4px; text-shadow:1px 1px 4px rgba(0,0,0,0.6);">MINISTERIOS</h1>
</section>

<!-- MAIN -->
<main class="container-lg py-5">

    <!-- NIÑOS -->
    <div class="row align-items-center p-4 rounded-4 mb-4" style="background:#b7d3df;">
        <div class="col-md-7 mb-3 mb-md-0">
            <h2 class="fw-bold mb-3" style="letter-spacing:3px;">NIÑOS</h2>
            <p style="font-size:14px;line-height:1.6;">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <button class="btn" style="background:#5aa0be;color:white;">ÚNETE</button>
        </div>
        <div class="col-md-5">
            <div class="d-flex gap-2 justify-content-md-end">
                <img src="{{ asset('images/img1.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
                <img src="{{ asset('images/img2.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
                <img src="{{ asset('images/img3.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
            </div>
        </div>
    </div>

    <!-- JÓVENES -->
    <div class="row align-items-center p-4 rounded-4 mb-4" style="background:#7b5a49;color:white;">
        <div class="col-md-5 mb-3 mb-md-0">
            <div class="d-flex gap-2">
                <img src="{{ asset('images/img1.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
                <img src="{{ asset('images/img2.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
                <img src="{{ asset('images/img3.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
            </div>
        </div>
        <div class="col-md-7">
            <h2 class="fw-bold mb-3" style="letter-spacing:3px;">JÓVENES</h2>
            <p style="font-size:14px;line-height:1.6;">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <button class="btn" style="background:#5aa0be;color:white;">ÚNETE</button>
        </div>
    </div>

    <!-- MUJERES -->
    <div class="row align-items-center p-4 rounded-4 mb-4" style="background:#b7d3df;">
        <div class="col-md-7 mb-3 mb-md-0">
            <h2 class="fw-bold mb-3" style="letter-spacing:3px;">MUJERES</h2>
            <p style="font-size:14px;line-height:1.6;">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <button class="btn" style="background:#5aa0be;color:white;">ÚNETE</button>
        </div>
        <div class="col-md-5">
            <div class="d-flex gap-2 justify-content-md-end">
                <img src="{{ asset('images/img1.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
                <img src="{{ asset('images/img2.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
                <img src="{{ asset('images/img3.jpeg') }}" class="rounded-3" style="width:90px;height:120px;object-fit:cover;">
            </div>
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
