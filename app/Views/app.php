<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirari Home</title>

    <!-- เรียกใช้ Library fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.css'); ?>">

    <!-- เรียกใช้ Library bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-5/bootstrap.min.css'); ?>">

    <!-- Owlcarousel -->
    <link rel="stylesheet" href="<?= base_url('assets/owlcarousel/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/owlcarousel/assets/owl.theme.default.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/fonts/FCIconic/stylesheet.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/css/landing.css'); ?>">
</head>
<body>

    <?= $this->renderSection('content') ?>

    <!-- jQuery -->
    <script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url('assets/bootstrap-5/bootstrap.min.js'); ?>"></script>

    <!-- Owlcarousel -->
    <script src="<?= base_url('assets/owlcarousel/owl.carousel.min.js'); ?>"></script>

    <?= $this->include('script') ?>
</body>
</html>