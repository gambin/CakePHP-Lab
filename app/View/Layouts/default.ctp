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
                <?php echo $this->element('menu', array('cache' =>true)) ?>
                <h1 id="titulo-pagina">17º Encontro dos Criadores de Pardais Amestrados da Groenlândia</h1> 
                <?php echo $content_for_layout ?>
        </div>
</div>
</body>
</html>