<?php
$paginaAtual = 'compras';
$estaNasPaginas = true;

$produtoEscolhido = $_GET['produto'] ?? 'notebook-pro';

switch ($produtoEscolhido) {
    case 'placa-de-video-rtx':
        $nomeProduto = 'Placa de Vídeo RTX';
        $valorProduto = 2499.90;
        break;
    case 'notebook-pro':
        $nomeProduto = 'Notebook Pro';
        $valorProduto = 3499.90;
        break;
    case 'memoria-ram-ddr4':
        $nomeProduto = 'Memória RAM DDR4';
        $valorProduto = 329.90;
        break;
    case 'ssd-1-tb':
        $nomeProduto = 'SSD 1 TB';
        $valorProduto = 429.90;
        break;
    case 'processador-intel':
        $nomeProduto = 'Processador Intel';
        $valorProduto = 899.90;
        break;
    case 'placa-mae-gamer':
        $nomeProduto = 'Placa-mãe Gamer';
        $valorProduto = 799.90;
        break;
    case 'fonte-650w':
        $nomeProduto = 'Fonte 650W';
        $valorProduto = 399.90;
        break;
    case 'monitor-24':
        $nomeProduto = 'Monitor 24"';
        $valorProduto = 899.90;
        break;
    default:
        $nomeProduto = 'Notebook Pro';
        $valorProduto = 3499.90;
        break;
}

include '../includes/menu.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Informática | Finalizar compra</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="aplicacao">
        <main class="conteudo">
            <header class="topo">
                <div><span class="mini-titulo">LOJA DE INFORMÁTICA</span>
                    <h1>Finalizar compra</h1>
                </div>
                <div class="perfil">
                    <div class="avatar">TS</div>
                    <div><strong>Cliente</strong><small>Compra segura</small></div>
                </div>
            </header>
            <section class="area-central">
                <div class="checkout">
                    <div class="resumo-compra">
                        <span class="resumo-label">PRODUTO SELECIONADO</span>
                        <h3><?php echo htmlspecialchars($nomeProduto); ?></h3>
                        <p>Você clicou em Comprar neste produto.</p>
                        <div class="linha-preco"><span>Valor do produto</span><strong>R$
                                <?php echo number_format($valorProduto, 2, ',', '.'); ?></strong></div>
                    </div>
                    <div class="pagamento">
                        <h3>Escolha a forma de pagamento</h3>
                        <p class="texto-suave">Selecione uma opção para continuar.</p>
                        <div class="opcoes-pagamento">
                            <a href="cartao.php?produto=<?php echo urlencode($produtoEscolhido); ?>"
                                class="opcao-pagamento"><span class="icone-pagamento">▣</span>
                                <div><strong>Cartão</strong><small>Crédito ou débito</small></div><span>→</span>
                            </a>
                            <a href="pix.php?produto=<?php echo urlencode($produtoEscolhido); ?>"
                                class="opcao-pagamento"><span class="icone-pagamento">◈</span>
                                <div><strong>Pix</strong><small>Pagamento instantâneo</small></div><span>→</span>
                            </a>
                        </div>
                        <a class="link-cancelar" href="produtos.php">Cancelar compra</a>
                    </div>
                </div>
            </section>
            <footer class="rodape"><span>© 2026 TS Informática</span><span>Projeto educacional</span></footer>
        </main>
    </div>
</body>

</html>