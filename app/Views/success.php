<?= $this->extend('app') ?>

<?= $this->section('content') ?>
    
    <div class="container-fluid landing-success">
        <div class="card text-center pt-5 ps-5 pe-5 pb-3 position-absolute top-50 start-50 translate-middle">
            <span>ลงทะเบียนเยี่ยมชมโครงการ เพื่อรับสิทธิพิเศษ</span>
            <div class="text-white">
                <strong class="ff-bold fs-1 d-block">สำเร็จแล้ว</strong>
                <i class="far fa-check-circle display-1"></i>
            </div>
            <div class="mt-3">
                <a href="<?= site_url() ?>" class="btn-primary text-decoration-none fs-6 ps-3 pe-3 pt-1 pb-1">กลับ</a>
            </div>
        </div>
    </div>

    <script>
        setTimeout(() => {location.href = '<?= site_url() ?>';}, 2500);
    </script>
<?= $this->endSection() ?>