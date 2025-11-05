<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon" />
    <link rel="icon" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>" type="image/png" sizes="16x16" />
    <link rel="icon" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>" type="image/png" sizes="32x32" />
    <link rel="apple-touch-icon" href="<?= base_url('assets/favicon/apple-touch-icon.png') ?>" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
    <link rel="preload" href="/assets/images/muhammad-fattahillah.png" as="image" />
</head>

<body style="background-color: #0f172a;">
    <div class="main-container px-6 md:px-16">
        <div class="pointer-movement w-full h-full fixed top-0 left-0 duration-700 hidden xl:block" id="pointerMovement"></div>
        <?= $this->include('layouts/landing-page') ?>
        <?= $this->renderSection('content') ?>
    </div>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/typeit@8.8.7/dist/index.umd.js"></script>
    <script src="https://kit.fontawesome.com/37a9127a04.js" crossorigin="anonymous"></script>
</body>

</html>