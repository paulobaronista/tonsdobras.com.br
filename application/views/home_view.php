<div class="container-fluid padding-off tt">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p>BREVE Lançamento - Brás</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 padding-off">
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/banner.jpg" alt="Tons do Brás">
        </div>
    </div>
</div>
<div class="container-fluid padding-off info">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/dorms.png" alt="1 e 2 dorms Com terraço 1 vaga* lazer total">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 padding-off">
            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/dt.jpg" alt="Tons do Brás">
        </div>
    </div>
</div>
<div class="container-fluid padding-off">
    <div class="galeria">
        <section class="galeria-home slider">
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/.jpg" alt="">
            </div>
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/.jpg" alt="">
            </div>
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/.jpg" alt="">
            </div>
            <div>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/.jpg" alt="">
            </div>
        </section>
    </div>
</div>
<div class="container contato">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <h5>Rua Capitão Faustino de Lima, 181 • Brás</h5>
            <p>ENTRE EM CONTATO PARA DEIXAR SUA VIDA MAIS COLORIDA.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 padding-off margin-top-30">
            <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                <div class="group-form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Nome*" />
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="Email*" />
                        </div>
                        <div class="form-group">
                            <input id="telefone" class="phone form-control" type="tel" name="phone" placeholder="Telefone" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-9 col-md-10 padding-off dt hidden-xs"></div>
                        <div class="col-xs-12 col-sm-3 col-md-2 dt1">
                            <div class="form-group">
                                <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>