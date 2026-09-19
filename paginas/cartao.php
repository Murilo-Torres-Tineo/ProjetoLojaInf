<?php
$paginaAtual = 'compras';
$estaNasPaginas = true;
$produtoEscolhido = $_GET['produto'] ?? 'notebook-pro';
$dados = [
    'placa-de-video-rtx' => ['Placa de Vídeo RTX', 2499.90],
    'notebook-pro' => ['Notebook Pro', 3499.90],
    'memoria-ram-ddr4' => ['Memória RAM DDR4', 329.90],
    'ssd-1-tb' => ['SSD 1 TB', 429.90],
    'processador-intel' => ['Processador Intel', 899.90],
    'placa-mae-gamer' => ['Placa-mãe Gamer', 799.90],
    'fonte-650w' => ['Fonte 650W', 399.90],
    'monitor-24' => ['Monitor 24"', 899.90]
];
if (!isset($dados[$produtoEscolhido]))
    $produtoEscolhido = 'notebook-pro';
$nomeProduto = $dados[$produtoEscolhido][0];
$valorProduto = $dados[$produtoEscolhido][1];
include '../includes/menu.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento com Cartão</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="aplicacao">
        <main class="conteudo">
            <header class="topo">
                <div><span class="mini-titulo">PAGAMENTO</span>
                    <h1>Cartão de crédito</h1>
                </div>
                <div class="perfil">
                    <div class="avatar">TS</div>
                    <div><strong>Cliente</strong><small>Pagamento seguro</small></div>
                </div>
            </header>
            <div class="area-central">
                <section class="formulario-pagamento">
                    <div class="resumo-mini">
                        <span>Produto</span><strong><?php echo htmlspecialchars($nomeProduto); ?></strong><b>R$
                            <?php echo number_format($valorProduto, 2, ',', '.'); ?></b>
                    </div>
                    <form action="resultado.php" method="post"><input type="hidden" name="produto"
                            value="<?php echo htmlspecialchars($nomeProduto); ?>"><input type="hidden" name="valor"
                            value="<?php echo $valorProduto; ?>"><input type="hidden" name="pagamento" value="Cartão">
                        <div class="campo"><label for="nome">Nome completo</label><input type="text" id="nome"
                                name="nome" placeholder="Digite seu nome" required></div>
                        <div class="linha-formulario">
                            <div class="campo"><label for="numero">Número do cartão</label><input type="text"
                                    id="numero" name="numero" placeholder="0000 0000 0000 0000" required></div>
                            <div class="campo"><label for="validade">Validade</label><input type="text" id="validade"
                                    name="validade" placeholder="MM/AA" required></div>
                        </div>
                        <div class="linha-formulario">
                            <div class="campo"><label for="titular">Nome no cartão</label><input type="text"
                                    id="titular" name="titular" placeholder="Nome do titular" required></div>
                            <div class="campo"><label for="cvv">CVV</label><input type="text" id="cvv" name="cvv"
                                    placeholder="123" required></div>
                        </div>
                        <div class="acoes-formulario"><a
                                href="compras.php?produto=<?php echo urlencode($produtoEscolhido); ?>"
                                class="botao-secundario">Voltar</a><button type="submit"
                                class="botao-principal">Confirmar pagamento</button></div>
                    </form>
                </section>
            </div>
            <footer class="rodape"><span>© 2026 TS Informática</span><span>Projeto educacional</span></footer>
        </main>
    </div>
</body>

</html>