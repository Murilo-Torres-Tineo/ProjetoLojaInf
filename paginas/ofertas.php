<?php
$paginaAtual = 'ofertas';
$estaNasPaginas = true;

$ofertas = [
    ['slug' => 'notebook-pro', 'nome' => 'Notebook Pro', 'preco' => 3499.90, 'imagem' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=700&q=80', 'tag' => 'OFERTA'],
    ['slug' => 'placa-de-video-rtx', 'nome' => 'Placa de Vídeo RTX', 'preco' => 2499.90, 'imagem' => 'https://images.unsplash.com/photo-1591488320449-011701bb6704?auto=format&fit=crop&w=700&q=80', 'tag' => '-20%'],
    ['slug' => 'ssd-1-tb', 'nome' => 'SSD 1 TB', 'preco' => 429.90, 'imagem' => 'https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?auto=format&fit=crop&w=700&q=80', 'tag' => 'SUPER'],
    ['slug' => 'memoria-ram-ddr4', 'nome' => 'Memória RAM DDR4', 'preco' => 329.90, 'imagem' => 'https://images.unsplash.com/photo-1562976540-1502c2145186?auto=format&fit=crop&w=700&q=80', 'tag' => 'PROMO'],
    ['slug' => 'monitor-24', 'nome' => 'Monitor 24"', 'preco' => 899.90, 'imagem' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?auto=format&fit=crop&w=700&q=80', 'tag' => 'RÁPIDA'],
    ['slug' => 'fonte-650w', 'nome' => 'Fonte 650W', 'preco' => 399.90, 'imagem' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=700&q=80', 'tag' => 'LIMITE']
];

include '../includes/menu.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas da Semana</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="aplicacao">
        <main class="conteudo">
            <header class="topo">
                <div>
                    <span class="mini-titulo">TS INFORMÁTICA</span>
                    <h1>Ofertas da Semana</h1>
                </div>
                <div class="perfil">
                    <div class="avatar">TS</div>
                    <div>
                        <strong>Cliente</strong>
                        <small>Promoções exclusivas</small>
                    </div>
                </div>
            </header>

            <div class="area-central">
                <section class="produtos ofertas-page">
                    <div class="cabecalho-secao cabecalho-ofertas">
                        <div>
                            <span class="mini-titulo">PROMOÇÕES</span>
                            <h2>Descontos especiais</h2>
                        </div>
                        <span class="contador contador-ofertas"><?php echo count($ofertas); ?> ofertas</span>
                    </div>

                    <div class="grade-produtos">
                        <?php foreach ($ofertas as $produto): ?>
                            <article class="produto-card oferta-card">
                                <div class="produto-imagem">
                                    <img src="<?php echo htmlspecialchars($produto['imagem']); ?>"
                                        alt="<?php echo htmlspecialchars($produto['nome']); ?>">
                                    <span class="tag-produto"><?php echo htmlspecialchars($produto['tag']); ?></span>
                                </div>

                                <div class="produto-info">
                                    <h3><?php echo htmlspecialchars($produto['nome']); ?></h3>
                                    <p>Produto em destaque com preço especial por tempo limitado.</p>

                                    <div class="produto-final">
                                        <small>Preço promocional</small>
                                        <strong>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></strong>
                                        <a href="compras.php?produto=<?php echo urlencode($produto['slug']); ?>"
                                            class="botao-comprar">Comprar</a>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>

            <footer class="rodape">
                <span>© 2026 TS Informática</span>
                <span>Projeto educacional</span>
            </footer>
        </main>
    </div>
</body>

</html>