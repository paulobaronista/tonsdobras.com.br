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

<div class="float-box">
    <a href="https://vemplan.sigavi360.com.br/Chat/NovoAtendimento/1133?midia=land_tons" class="chat" target="_blank">Chat on-line</a>
    <a href="https://api.whatsapp.com/send?phone=5511964861154&text=Olá%2C%20entrei%20no%20site%20do%20Tons%20do%20Br%C3%A1s%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="whats">Whatsapp</a>
</div>

</body>

</html>