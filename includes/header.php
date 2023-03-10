<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="O PET de Geografia da Universidade Estadual de Londrina foi criado em 1994. O objetivo principal do programa é promover a formação ampla e de qualidade acadêmica dos alunos de graduação envolvidos direta ou indiretamente com o programa, estimulando a fixação de valores que reforcem a cidadania e a consciência social de todos os participantes e a melhorias dos cursos de graduação.">
    <title>
    <?php
    if ($title) {
        echo $title . " &#124; ";
    }
    ?>
    PET Geografia - UEL
    </title>

    <link rel="stylesheet" href="/resources/css/style.min.css" type="text/css" media="screen">
    <link rel="shortcut icon" href="/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/resources/js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $(".rslides").responsiveSlides({
                auto: true,
                speed: 500,
                pager: true,
                pause: true,
                nav: true
            });
        });
    </script>

</head>
<body>
<div id="header">
    <div class="logo">
        <a href="/" ><img src="/resources/img/logo.png" /></a>
    </div>
    <input type="checkbox" id="control-nav" />
    <label for="control-nav" class="control-nav"></label>
    <label for="control-nav" class="control-nav-close"></label>
    <nav id="menu">
        <ul>
            <li>
                <a href="sobre">Sobre o PET</a>
                <ul class="sub-menu">
                    <li><a href="integrantes">Integrantes</a></li>
                    <li><a href="colaboradores">Colaboradores</a></li>
                    <li><a href="egressos">Egressos</a></li>
                </ul>
            </li>
            <li><a href="galeria">Galeria</a></li>
            <li><a href="espaco_cultural">Espaço Cultural</a></li>
            <li><a href="roteiros">Roteiros Geográficos</a></li>
            <li><a href="oficinas">Oficinas Pedagógicas</a></li>
            <li><a href="contato">Fale conosco</a></li>
        </ul>
    </nav>
</div>

<div id="content">
