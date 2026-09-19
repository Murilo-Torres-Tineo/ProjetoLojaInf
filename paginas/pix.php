<?php
$paginaAtual = 'compras';
$estaNasPaginas = true;
$produtoEscolhido = $_GET['produto'] ?? 'notebook-pro';

$dados = [
    'placa-de-video-rtx' => [
        'Placa de Vídeo RTX',
        2499.90
    ],

    'notebook-pro' => [
        'Notebook Pro',
        3499.90
    ],

    'memoria-ram-ddr4' => [
        'Memória RAM DDR4',
        329.90
    ],

    'ssd-1-tb' => [
        'SSD 1 TB',
        429.90
    ],

    'processador-intel' => [
        'Processador Intel',
        899.90
    ],

    'placa-mae-gamer' => [
        'Placa-mãe Gamer',
        799.90
    ],

    'fonte-650w' => [
        'Fonte 650W',
        399.90
    ],

    'monitor-24' => [
        'Monitor 24"',
        899.90
    ]
];

if (!isset($dados[$produtoEscolhido])) {
    $produtoEscolhido = 'notebook-pro';
}
//serve para pegar os dois valores que estão dentro do produto escolhido e colocar cada um em uma variável.
[$nomeProduto, $valorProduto] = $dados[$produtoEscolhido];

include '../includes/menu.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento via Pix</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="aplicacao">
        <main class="conteudo">
            <header class="topo">
                <div>
                    <span class="mini-titulo">PAGAMENTO</span>
                    <h1>Pix</h1>
                </div>
            </header>
            <div class="area-central">
                <div class="pix-pagina">
                    <div class="pix-info">
                        <span class="resumo-label">PRODUTO

                        </span>
                        <h3><?php echo htmlspecialchars($nomeProduto); ?>
                        </h3>
                        <p>Pagamento via Pix.</p>
                        <strong class="preco-grande">R$ <?php echo number_format($valorProduto, 2, ',', '.'); ?>
                        </strong>
                        <div class="pix-aviso"><span>✓</span>
                            <div><strong>Pagamento instantâneo</strong><small>Escaneie o QR Code para pagar.</small>
                            </div>
                        </div>
                    </div>
                    <div class="qr-area">
                        <div class="qr-box"><img
                                src="https://api.qrserver.com/v1/create-qr-code/?size=260x260&data=TS-INFORMATICA-<?php echo urlencode($produtoEscolhido); ?>"
                                alt="QR Code Pix"></div>
                        <form action="resultado.php" method="post"><input type="hidden" name="produto"
                                value="<?php echo htmlspecialchars($nomeProduto); ?>"><input type="hidden" name="valor"
                                value="<?php echo $valorProduto; ?>"><input type="hidden" name="pagamento"
                                value="Pix"><button class="botao-principal" type="submit">Já realizei o
                                pagamento</button></form>
                    </div>
                </div>
            </div>
            <footer class="rodape"><span>© 2026 TS Informática</span><span>Projeto educacional</span></footer>
        </main>
    </div>
</body>

</html>