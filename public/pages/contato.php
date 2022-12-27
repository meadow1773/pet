<?php

$title = "Contato";
include 'includes/header.php';
?>

<div id="content-wrapper">
    <div id="pages">
        <h1 class="p-title">Contato</h1>
        <div class="page-content">
            <p align="center">
                Caso queira entrar em contato conosco, você pode nos seguir em nossa página do <a href="<?php echo $_ENV['FACEBOOK']; ?>">Facebook</a> e mandar um recado por inbox, falar conosco pelo formulário abaixo, ou mesmo nos enviar um email para: <a href="mailto:<?php echo $_ENV['EMAIL']; ?>"><?php echo $_ENV['EMAIL']; ?></a>.
            </p>
            <center>
                <form id="contato" name="contato" enctype="multipart/form-data">
                    <p><label for="nome">Nome:</label><br />
                        <input name="nome" type="text" />
                    </p>
                    <p><label for="email">Email:</label><br />
                        <input name="email" type="email" />
                    </p>
                    <p><label for="assunto">Assunto:</label><br />
                        <input name="assunto" type="text" />
                    </p>
                    <p><label for="mensagem">Mensagem:</label><br />
                        <textarea name="mensagem" cols="40" rows="7"></textarea>
                    </p>
                    <p>
                    <div class="g-recaptcha" data-sitekey="<?php echo $_ENV['CAPTCHA_SITE_KEY']; ?>"></div>
                    </p>
                    <p><input name="enviar" type="submit" value="Enviar" /></p>
                </form>
            </center>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <script src="/resources/js/valida.js"></script>
        </div>
    </div>
</div>

</div>
<?php include 'includes/footer.php'; ?>
