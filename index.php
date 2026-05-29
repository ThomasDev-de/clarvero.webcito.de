<?php
?><!doctype html>
<html lang="es" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clarvero</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="d-flex flex-column h-100 justify-content-center align-items-stretch">
<header class="shadow d-flex justify-content-center py-4 align-items-center gap-2">

    <i class="bi bi-lightning-charge-fill me-3 fw-bold fs-1"></i>
    <h1 class="fw-bold">Clarvero</h1>
</header>
<main class="py-4 d-flex flex-column flex-fill">
    <section class="mb-4 d-flex flex-column align-items-center">
        <h2>¿Problema eléctrico?</h2>
        <h2>Obtén una orientación en minutos.</h2>
        <div class="divider mb-4"></div>
        <p class="desc text-center">Describe tu avería (texto, fotos o audio)<br>y te orientamos sobre qué puede ser y cuánto suele costar
            <strong>en tu
                zona.</strong></p>

        <div class="illustration mt-4 d-flex align-items-start justify-content-center pt-1">
            <div class="white-gradient" style="z-index: -2">
                <img src="assets/img/graphics-clarvero.svg#electrician" height="177">
            </div>
        </div>
        <img src="assets/img/wave.svg" height="512" width="1280" class="position-absolute" style="bottom: 0; left: 0; z-index: -1; width: 100%">
    </section>

    <div class="curve-a"></div>
    <div class="curve-b"></div>
    <div class="curve-c"></div>

    <div class="content-bottom flex-column d-flex align-items-center">
        <div class="d-flex justify-content-center">
            <button class="btn btn-1 fs-2 btn-lg border-0 shadow  rounded-pill d-flex align-items-center justify-content-center gap-2"
                    type="button">
                Ver qué puede ser <i class="bi bi-feather ms-3 fs-1"></i>
            </button>
        </div>

        <div class=" mt-4 d-flex flex-column gap-0 border-top w-50 fs-5">
            <div class="border-bottom d-flex align-items-center py-2"><i class="bi bi-stopwatch me-3  fs-1 fw-bold"></i><span>Menos de 2 minutos</span>
            </div>
            <div class="border-bottom d-flex align-items-center py-2"><i class="bi bi-shield-check me-3 fs-1 fw-bold"></i><span>Sin compromiso</span>
            </div>
            <div class=" d-flex align-items-center py-2 border-bottom"><i class="bi bi-info-circle me-3  fs-1 fw-bold"></i><span>Solo una orientación inicial</span>
            </div>
        </div>

    </div>

</main>
<p class="text-center bg-transparent small py-1">La estimación es orientativa y debe ser confirmada por un profesional.</p>

</body>
</html>
