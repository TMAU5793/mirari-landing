<?= $this->extend('app') ?>

<?= $this->section('content') ?>
    
    <div class="container-fluid mirari-landing">

        <section class="sect-1">
            <div class="row">
                <div class="col-md-7 p-0">
                    <img src="<?= site_url('assets/images/sect-1.jpg') ?>" alt="">
                </div>
                <div class="col-md-5 position-relative">
                    <div class="form-register">
                        <div class="form-head mb-3">
                            <span class="d-block">ลงทะเบียนเยี่ยมชมโครงการวันนี้ เพื่อรับสิทธิพิเศษ</span>
                            <h1 class="c-sky ff-bold mb-0 fs-2">ฟรี!! ส่วนลดสูงสุด 1,200,000 บาท</h1>
                            <span>เฉพาะ 1-28 กุมภาพันธ์ นี้เท่านั้น</span>
                        </div>
                        <form action="<?= site_url('home/register') ?>" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="far fa-user-circle c-gray"></i></span>
                                <input type="text" class="form-control" name="txt_name" placeholder="ชื่อ - นามสกุล *" value="<?= set_value('txt_name') ?>">
                                <span class="text-danger d-block"><?= (isset($validation) && $validation->hasError('txt_name')?$validation->getError('txt_name'):'') ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-phone-alt c-gray"></i></span>
                                <input type="text" class="form-control" name="txt_phone" placeholder="เบอร์โทร *" value="<?= set_value('txt_phone') ?>">
                                <span class="text-danger d-block"><?= (isset($validation) && $validation->hasError('txt_phone')?$validation->getError('txt_phone'):'') ?></span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="far fa-envelope c-gray"></i></span>
                                <input type="text" class="form-control" name="txt_email" placeholder="อีเมล *" value="<?= set_value('txt_email') ?>">
                                <span class="text-danger d-block"><?= (isset($validation) && $validation->hasError('txt_email')?$validation->getError('txt_email'):'') ?></span>
                            </div>
                            <button type="submit" class="btn btn-register glow-on-hover">ลงทะเบียน</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="sect-2">
            <?= $this->include('home-slide') ?>
        </section>

        <section class="sect-3 mt-5">
            <div class="text-center btn-mirari-group">                
                <a href="https://www.facebook.com/miraribymarvelland/" target="_blank" class="btn-mirari btn-facebook">Mirari Home</a>
                <a href="https://www.miraribymarvelland.com/" target="_blank" class="btn-mirari btn-website">Website</a>
            </div>
        </section>

        <section class="sect-4 mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.1904082152555!2d100.26844111536838!3d13.646178603407659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bfb8d339c28d%3A0xe196727527d14d27!2sMIRARI!5e0!3m2!1sen!2sth!4v1643270488805!5m2!1sen!2sth" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="sect-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-img">
                        <img src="<?= site_url('assets/images/logo.png') ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8 pt-3">
                    <div class="col-text">
                        <h3 class="mb-0"><strong>ที่ตั้งโครงการ</strong></h3>
                        <p class="c-gray mb-0">โครงการบ้านมิรารี่ เพชรเกษม - กระทุ่มแบน</p>
                        <p class="c-gray">เลขที่ 111 หมู่ที่ 3 ต.ดอนไก่ดี อ.กระทุ่มแบน จ.สมุทรสาคร 74110 ประเทศไทย</p>
                    </div>
                    <div class="col-social">
                        <a href="http://line.me/ti/p/~@mirarihome" target="_blank">
                            <i class="fab fa-line" title="Line"></i>
                        </a>
                        <a href="https://www.facebook.com/miraribymarvelland/" target="_blank">
                            <i class="fab fa-facebook-square" title="Facebook"></i>
                        </a>
                        <a href="tel:092-479-6963">
                            <i class="fas fa-phone-alt" title="Phone"></i>
                        </a>
                        <a href="mailto:mirari.mvl@gmail.com">
                            <i class="fas fa-envelope" title="Mail"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="footer text-center">
            <span>© 2021 Mirari Home All Rights Reserved.</span>
        </div>
    </div>

<?= $this->endSection() ?>