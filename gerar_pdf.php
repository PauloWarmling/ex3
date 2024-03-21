<?php

// Inclua o autoload do Composer para carregar as classes do TCPDF
require 'vendor/autoload.php';

// Crie uma nova instância do TCPDF
$pdf = new TCPDF();

// Defina o título do documento
$pdf->SetTitle('Exemplo de PDF com TCPDF');

// Adicione uma página em branco
$pdf->AddPage();

// Defina o conteúdo do PDF
$pdf->writeHTML('<h1>Olá, mundo!</h1>');

// Saída do PDF (baixando diretamente)
$pdf->Output('exemplo.pdf', 'D');
