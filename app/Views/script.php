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
    });
</script>