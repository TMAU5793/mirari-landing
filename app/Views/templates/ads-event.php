<script>    
    <?php
        $register = session()->get('register');
        if($register){
    ?>            
        fbq('track', 'CompleteRegistration');
    <?php } ?>
</script>

<!-- Event snippet for ส่งฟอร์มโอกาสในการขาย conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion(url) {
        var callback = function () {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-399404205/wxJFCK2G5ZcDEK3Zub4B',
            'event_callback': callback
        });
        return false;
    }
</script>