<?php
echo $this->Form->create('Inscricao', array('url' => array('controller' => 'inscricoes', 'action' => 'inscrever')));
echo $this->Form->input('Nome');
echo $this->Form->input('Email');
echo $this->Form->input('Telefone');
echo $this->Form->input('Endereco');
echo $this->Form->submit('Inscrever', array('div' => false, 'class' => 'submit'));
echo $this->Form->end();
?>
