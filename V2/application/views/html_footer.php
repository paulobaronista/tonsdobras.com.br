<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php
echo script_tag('assets/js/slick.js');
echo script_tag('assets/js/jquery.clearinput.js');
echo script_tag('assets/js/jFuncoes.js');
echo script_tag('assets/js/bootstrap.min.js');
echo script_tag('assets/js/wow.min.js');
?>

<script>
    $(window).load(function() {
        $("#loader").fadeOut();
    });

    $(document).on('ready', function() {
        new WOW().init();
    });
</script>

</body>

</html>