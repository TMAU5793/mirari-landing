<?= $this->extend('app') ?>

<?= $this->section('content') ?>
    
    <div class="container-fluid landing-customer mt-5">
        <div class="container">
            <?php
                $login = session()->get('logindata');
                if($login){
            ?>
                <div class="logo text-center">
                    <img src="<?= site_url('assets/images/logo-150.png') ?>" alt="" style="max-width:150px;">
                </div>
                <h4 class="text-center ff-bold mt-3">ลงทะเบียนเยี่ยมชมโครงการ</h4>
                <div class="text-center">
                    <a href="<?= site_url('logout') ?>" class="btn btn-warning d-inline-block text-center" style="padding: 0 .5rem;">ออกจากระบบ</a>
                </div>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ชื่อ - นามสกุล</th>
                            <th scope="col">เบอร์โทร</th>
                            <th scope="col">อีเมล</th>
                            <th scope="col">วันที่ลงทะเบียน</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($info){
                                foreach ($info as $row){
                        ?>
                            <tr>
                                <th scope="row"><?= $row['name'] ?></th>
                                <td><?= $row['phone'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['created_at'] ?></td>
                                <td><i class="fas fa-trash-alt text-danger cursor-pointer" title="ลบ" data-id="<?= $row['id'] ?>"></i></td>
                            </tr>
                        <?php } }else{ ?>
                            <tr>
                                <td class="text-center" colspan="5">ไม่พบข้อมูล</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if(isset($pager)){ ?>
                    <div class="pagination-list text-center mt-3 d-flex">
                        <strong class="pe-3">หน้า</strong><?= $pager->links() ?>
                    </div>
                <?php } ?>

            <?php }else{ ?>
                <div class="form-register">
                    <div class="logo">
                        <img src="<?= site_url('assets/images/logo-150.png') ?>" alt="">
                    </div>
                    <form action="<?= site_url('customer') ?>" method="POST">
                        <span class="text-danger d-block fs-6 text-start"><?= (isset($loginfail)?'* บัญชีผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง':'') ?></span>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="far fa-user-circle c-gray"></i></span>
                            <input type="text" class="form-control" name="txt_account" placeholder="บัญชีผู้ใช้ *" value="<?= set_value('txt_account') ?>">
                            <span class="text-danger d-block"><?= (isset($validation) && $validation->hasError('txt_account')?$validation->getError('txt_account'):'') ?></span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-key c-gray"></i></span>
                            <input type="password" class="form-control" name="txt_password" placeholder="รหัสผ่าน *" value="<?= set_value('txt_password') ?>">
                            <span class="text-danger d-block"><?= (isset($validation) && $validation->hasError('txt_password')?$validation->getError('txt_password'):'') ?></span>
                        </div>
                        <button type="submit" class="btn btn-register glow-on-hover">เข้าสู่ระบบ</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>

<?= $this->endSection() ?>