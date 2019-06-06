<?php
$form = array('action' => base_url() . 'modulo/funcionalidade/salvar');

$config = array('title' => 'Título', 'url_back' => base_url() . 'modulo/funcionalidade', 'form' => $form);

Formularios::adicionarInit($config);?>

<?php Formularios::adicionarEnd();