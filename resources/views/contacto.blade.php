<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contacto</title>
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
    <h1 class="fw-bold text-white" style="font-size:3rem;letter-spacing:4px;text-shadow:1px 1px 4px rgba(0,0,0,0.6);">CONTACTO</h1>
</section>

<!-- MAIN -->
<main class="container-lg py-5">
    <div class="row g-5">

        <!-- FORMULARIO -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-4" style="letter-spacing:2px;font-size:1.1rem;">PONTE EN CONTACTO CON NOSOTROS:</h2>
            <div class="p-4 rounded-4" style="background:#b7d3df;">
                <div class="mb-3">
                    <label class="form-label fw-bold" style="font-size:14px;">Nombre:</label>
                    <input type="text" class="form-control" style="border-radius:8px;">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="font-size:14px;">Correo electrónico:</label>
                    <input type="email" class="form-control" style="border-radius:8px;">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold" style="font-size:14px;">Número:</label>
                    <input type="tel" class="form-control" style="border-radius:8px;">
                </div>
                <button class="btn w-100" style="background:#5aa0be;color:white;border-radius:8px;">ENVIAR</button>
            </div>
        </div>

        <!-- MEDIOS Y REDES -->
        <div class="col-md-6">

            <!-- MEDIOS -->
            <h2 class="fw-bold mb-4" style="letter-spacing:2px;font-size:1.1rem;">NUESTROS MEDIOS DE CONTACTOS:</h2>
            <div class="d-flex flex-column gap-3 mb-5">

                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px;background:#25d366;flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </div>
                    <span>55 3454 5438</span>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px;background:#5aa0be;flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    </div>
                    <span>salem-cuautitlan@hotmail.com</span>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px;background:#0084ff;flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20" height="20"><path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.683V24l4.088-2.242c1.092.301 2.246.464 3.443.464 6.627 0 12-4.974 12-11.111S18.627 0 12 0zm1.191 14.963l-3.055-3.26-5.963 3.26L10.732 8l3.131 3.259L19.752 8l-6.561 6.963z"/></svg>
                    </div>
                    <span>salem-cuautitlan@hotmail.com</span>
                </div>

            </div>

            <!-- REDES SOCIALES -->
            <h2 class="fw-bold mb-3" style="letter-spacing:2px;font-size:1.1rem;">¡SÍGUENOS EN REDES SOCIALES!</h2>
            <div class="d-flex gap-3">

                <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" style="width:48px;height:48px;background:#1877f2;text-decoration:none;" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24" height="24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>

                <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" style="width:48px;height:48px;background:#ff0000;text-decoration:none;" aria-label="YouTube">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24" height="24"><path d="M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
                </a>

                <a href="#" class="rounded-circle d-flex align-items-center justify-content-center" style="width:48px;height:48px;background:#e1306c;text-decoration:none;" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24" height="24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>

            </div>
        </div>

    </div>
</main>

<!-- FOOTER -->
<footer style="background:#6b4e3e;color:white;padding:25px 60px;" class="d-flex justify-content-between align-items-center flex-wrap gap-3 mt-4">
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
