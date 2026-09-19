<?php
// O menu fica em um único arquivo para ser reutilizado em todas as páginas.
// $paginaAtual informa qual item deve aparecer como ativo.
// $estaNasPaginas informa se a página está dentro da pasta paginas.
$prefixo = !empty($estaNasPaginas) ? '' : 'paginas/';
?>
<aside class="menu-lateral">
    <div class="marca">
        <div class="icone-marca">TS</div>
        <div>
            <strong>TS <span>Soluction</span></strong>
            <small>Informática</small>
        </div>
    </div>
    <nav class="navegacao">
        <a href="<?php echo $estaNasPaginas ? '../index.php' : 'index.php'; ?>"
            class="<?php echo $paginaAtual == 'inicio' ? 'ativo' : ''; ?>">🏠 <span>Início</span></a>
        <a href="<?php echo $prefixo; ?>produtos.php"
            class="<?php echo $paginaAtual == 'produtos' ? 'ativo' : ''; ?>">💻 <span>Produtos</span></a>
        <a href="<?php echo $prefixo; ?>compras.php" class="<?php echo $paginaAtual == 'compras' ? 'ativo' : ''; ?>">🛒
            <span>Compras</span></a>
        <a href="<?php echo $prefixo; ?>sobre.php" class="<?php echo $paginaAtual == 'sobre' ? 'ativo' : ''; ?>">ℹ️
            <span>Sobre</span></a>
    </nav>
    <div class="menu-inferior">
        <div class="card-ajuda">
            <div class="icone-ajuda">?</div>
            <div><strong>Precisa de ajuda?</strong><small>Fale conosco</small></div>
        </div>
    </div>
</aside>