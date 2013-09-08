<?php
include 'includes/gerador.php';
$quantidade = (int)$_REQUEST['q'];
if(!$quantidade) exit;
echo joelipsum($quantidade);