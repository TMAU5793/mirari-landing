<script>
    $(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items:1,
            autoplay: true
        });

        <?php
            $register = session()->get('register');
            if($register){
        ?>            
            $('#successModal').modal('show');
        <?php } ?>
        
        $('.landing-customer .fa-trash-alt').on('click',function(){
            var r = confirm("ยืนยันการลบข้อมูล");
            if (r == true) {
                let el = $(this);
                let id = $(this).data('id');
                $.post("<?= site_url('remove') ?>", {id:id},
                    function (resp) {
                        el.closest("tr").remove();
                    }
                );
            }
        });
    });
</script>