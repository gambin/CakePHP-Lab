<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title><?php echo $title_for_layout ?></title>
<?php echo $this->Html->css('estilo') ?>
</head>
<body>
<div id="geral">
    <div id="fundo-pardal"></div>
        <div id="conteudo-geral">
            <div id="menu-superior"> 
                <a href="/cakephp-lab">Home</a> | 
                <a href="sobre-o-evento">Sobre o Evento</a> | 
                <a href="como-chegar">Como Chegar</a> | 
                <a href="#">Contato </a>
            </div>
                <h1 id="titulo-pagina">17º Encontro dos Criadores de Pardais Amestrados da Groenlândia</h1> 
                <?php echo $content_for_layout ?>
        </div>
</div>
</body>
</html>