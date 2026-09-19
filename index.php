<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEC SOLUCTION</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="aplicacao">
        <?php
        $paginaAtual = 'inicio';
        $estaNasPaginas = false;
        include 'includes/menu.php';
        ?>
        <main class="conteudo">
            <header class="topo">
                <div>
                    <span class="mini-titulo">
                        LOJA DE Informática
                    </span>
                    <h1>
                        Página Inicial
                    </h1>
                </div>
                <div class="perfil">
                    <div class="avatar">
                        TS
                    </div>
                    <strong>Cliente</strong>
                    <small>Bem-vindo!</small>


                </div>

            </header>

            <div class="area-central">
                <section class="hero" id="inicio">
                    <div class="hero-texto">
                        <span class="etiqueta">
                            TECNOLOGIA PARA VOCÊ
                        </span>
                        <h2>
                            Monte seu computador
                            <span>do seu jeito</span>
                        </h2>
                        <p>
                            Encontre processadores, placas de vídeo,
                            memórias, SSDs e outros componentes para
                            montar ou atualizar seu computador.
                        </p>
                        <a href="paginas/produtos.php" class="botao-principal">
                            Ver produtos
                        </a>

                    </div>
                    <div class="hero-image">
                        <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?auto=format&fit=crop&w=900&q=80"
                            alt="Computador gamer">
                        <div class="selo-flutuante">
                            <strong>+100</strong>
                            <span>
                                produtos disponíveis
                            </span>
                        </div>
                    </div>
                </section>
                <!--Beneficios-->
                <section class="beneficios">
                    <div class="beneficio">
                        <span>🚚</span>
                        <div>
                            <strong>Entrega rápida</strong>
                            <small>Enviamos para todo o Brasil</small>
                        </div>
                    </div>

                    <div class="beneficio">
                        <span>🔒</span>
                        <div>
                            <strong>Compra segura</strong>
                            <small>Seus dados protegidos</small>
                        </div>
                    </div>

                    <div class="beneficio">
                        <span>💳
                        </span>
                        <div>
                            <strong>Pagamento fácil</strong>
                            <small>Cartão ou Pix</small>
                        </div>
                    </div>

                </section>
                <!-- Seção de produtos. -->
                <section class="produtos" id="produtos">


                    <div class="cabecalho-secao">

                        <div>

                            <span class="mini-titulo">
                                DESTAQUES
                            </span>

                            <h2>
                                Produtos em destaque
                            </h2>

                        </div>

                        <span class="contador">
                            8 produtos
                        </span>

                    </div>


                    <!-- Grade que contém os produtos. -->
                    <div class="grade-produtos">


                        <!-- Produto 1 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?auto=format&fit=crop&w=700&q=80"
                                    alt="Placa de vídeo">

                                <span class="tag-produto">
                                    DESTAQUE
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    Placa de Vídeo RTX
                                </h3>

                                <p>
                                    Alto desempenho para jogos
                                    e aplicações gráficas.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            A partir de
                                        </small>

                                        <strong>
                                            R$ 2.499,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=placa-de-v-deo-rtx" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                        <!-- Produto 2 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?auto=format&fit=crop&w=700&q=80"
                                    alt="Notebook">

                                <span class="tag-produto">
                                    OFERTA
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    Notebook Pro
                                </h3>

                                <p>
                                    Notebook para trabalho,
                                    estudos e produtividade.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            Por apenas
                                        </small>

                                        <strong>
                                            R$ 3.499,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=notebook-pro" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                        <!-- Produto 3 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1562976540-1502c2145186?auto=format&fit=crop&w=700&q=80"
                                    alt="Memória RAM">

                                <span class="tag-produto">
                                    16 GB
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    Memória RAM DDR4
                                </h3>

                                <p>
                                    Mais velocidade para
                                    seu computador.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            Por apenas
                                        </small>

                                        <strong>
                                            R$ 329,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=mem-ria-ram-ddr4" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                        <!-- Produto 4 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?auto=format&fit=crop&w=700&q=80"
                                    alt="SSD">

                                <span class="tag-produto">
                                    SSD
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    SSD 1 TB
                                </h3>

                                <p>
                                    Mais espaço e rapidez
                                    para seu computador.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            Por apenas
                                        </small>

                                        <strong>
                                            R$ 429,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=ssd-1-tb" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                        <!-- Produto 5 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1555617981-dac3880eac6e?auto=format&fit=crop&w=700&q=80"
                                    alt="Processador">

                                <span class="tag-produto">
                                    PROCESSADOR
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    Processador Intel
                                </h3>

                                <p>
                                    Excelente desempenho
                                    para seu computador.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            Por apenas
                                        </small>

                                        <strong>
                                            R$ 899,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=processador-intel" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                        <!-- Produto 6 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1587202372634-32705e3bf49c?auto=format&fit=crop&w=700&q=80"
                                    alt="Placa-mãe">

                                <span class="tag-produto">
                                    GAMER
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    Placa-mãe Gamer
                                </h3>

                                <p>
                                    Compatível com processadores
                                    de alto desempenho.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            Por apenas
                                        </small>

                                        <strong>
                                            R$ 799,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=placa-m-e-gamer" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                        <!-- Produto 7 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?auto=format&fit=crop&w=700&q=80"
                                    alt="Fonte de computador">

                                <span class="tag-produto">
                                    650W
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    Fonte 650W
                                </h3>

                                <p>
                                    Energia estável e segura
                                    para seu computador.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            Por apenas
                                        </small>

                                        <strong>
                                            R$ 399,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=fonte-650w" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                        <!-- Produto 8 -->
                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1547394765-185e1e68f34e?auto=format&fit=crop&w=700&q=80"
                                    alt="Monitor">

                                <span class="tag-produto">
                                    FULL HD
                                </span>

                            </div>

                            <div class="produto-info">

                                <h3>
                                    Monitor 24"
                                </h3>

                                <p>
                                    Imagens nítidas para trabalho
                                    e entretenimento.
                                </p>

                                <div class="produto-final">

                                    <div>
                                        <small>
                                            Por apenas
                                        </small>

                                        <strong>
                                            R$ 899,90
                                        </strong>
                                    </div>

                                    <a href="paginas/compras.php?produto=monitor-24" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                    </div>

                    <div class="cards-informacao">

                        <div class="informacao-card">

                            <span>01</span>

                            <h3>
                                Escolha o produto
                            </h3>

                            <p>
                                Escolha um dos produtos
                                disponíveis na loja.
                            </p>

                        </div>


                        <div class="informacao-card">

                            <span>02</span>

                            <h3>
                                Escolha o pagamento
                            </h3>

                            <p>
                                Você poderá escolher entre
                                cartão ou PIX.
                            </p>

                        </div>


                        <div class="informacao-card">

                            <span>03</span>

                            <h3>
                                Finalize a compra
                            </h3>

                            <p>
                                Informe seus dados e
                                confirme o pedido.
                            </p>

                        </div>

                    </div>

                </section>


                <!-- Sobre a loja. -->
                <section class="area-informacao" id="sobre">

                    <div class="cabecalho-secao">

                        <div>

                            <span class="mini-titulo">
                                SOBRE
                            </span>

                            <h2>
                                RS Home Informática
                            </h2>

                        </div>

                    </div>


                    <div class="sobre">

                        <div class="sobre-card">

                            <div class="icone-card">
                                🏪
                            </div>

                            <h3>
                                Quem somos
                            </h3>

                            <p>
                                Somos uma loja especializada em
                                produtos e componentes de informática,
                                oferecendo tecnologia para diferentes
                                necessidades.
                            </p>

                        </div>


                        <div class="sobre-card">

                            <div class="icone-card">
                                🎯
                            </div>

                            <h3>
                                Nosso objetivo
                            </h3>

                            <p>
                                Oferecer produtos de informática
                                com boas opções de preço,
                                desempenho e qualidade.
                            </p>

                        </div>


                        <div class="sobre-card">

                            <div class="icone-card">
                                💻
                            </div>

                            <h3>
                                Projeto
                            </h3>

                            <p>
                                Este projeto será utilizado para
                                aprender HTML, CSS e posteriormente
                                PHP.
                            </p>

                        </div>

                    </div>

                </section>


            </div>


            <!-- Rodapé da loja. -->
            <footer class="rodape">

                <span>
                    © 2026 TS Informática
                </span>

                <span>
                    Projeto educacional
                </span>

            </footer>

        </main>

    </div>






    </div>

    </main>

    </div>
</body>

</html>