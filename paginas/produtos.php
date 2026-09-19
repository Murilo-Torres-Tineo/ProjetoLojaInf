<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos - RS Home Informática</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="aplicacao">
        <?php
        $paginaAtual = 'produtos';
        $estaNasPaginas = true;
        include '../includes/menu.php';
        ?>
        <main class="conteudo">

            <header class="topo">

                <div>

                    <span class="mini-titulo">
                        TS Informática
                    </span>

                    <h1>Produtos</h1>

                </div>


                <div class="perfil">

                    <div class="avatar">RS</div>

                    <div>
                        <strong>Cliente</strong>
                        <small>Catálogo</small>
                    </div>

                </div>

            </header>


            <div class="area-central">

                <section class="produtos">

                    <div class="cabecalho-secao">

                        <div>

                            <span class="mini-titulo">
                                CATÁLOGO
                            </span>

                            <h2>Todos os produtos</h2>

                        </div>

                        <span class="contador">
                            8 produtos
                        </span>

                    </div>


                    <div class="grade-produtos">

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?auto=format&fit=crop&w=700&q=80"
                                    alt="Placa de vídeo">

                                <span class="tag-produto">
                                    DESTAQUE
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>Placa de Vídeo RTX</h3>

                                <p>
                                    Alto desempenho para jogos
                                    e aplicações gráficas.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 2.499,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=placa-de-video-rtx" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?auto=format&fit=crop&w=700&q=80"
                                    alt="Notebook">

                                <span class="tag-produto">
                                    OFERTA
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>Notebook Pro</h3>

                                <p>
                                    Notebook para trabalho,
                                    estudos e produtividade.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 3.499,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=notebook-pro" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1562976540-1502c2145186?auto=format&fit=crop&w=700&q=80"
                                    alt="Memória RAM">

                                <span class="tag-produto">
                                    16 GB
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>Memória RAM DDR4</h3>

                                <p>
                                    Mais velocidade para
                                    seu computador.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 329,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=memoria-ram-ddr4" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?auto=format&fit=crop&w=700&q=80"
                                    alt="SSD">

                                <span class="tag-produto">
                                    SSD
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>SSD 1 TB</h3>

                                <p>
                                    Mais espaço e rapidez
                                    para seu computador.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 429,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=ssd-1-tb" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1555617981-dac3880eac6e?auto=format&fit=crop&w=700&q=80"
                                    alt="Processador">

                                <span class="tag-produto">
                                    PROCESSADOR
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>Processador Intel</h3>

                                <p>
                                    Excelente desempenho
                                    para seu computador.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 899,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=processador-intel" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1587202372634-32705e3bf49c?auto=format&fit=crop&w=700&q=80"
                                    alt="Placa-mãe">

                                <span class="tag-produto">
                                    GAMER
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>Placa-mãe Gamer</h3>

                                <p>
                                    Compatível com processadores
                                    de alto desempenho.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 799,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=placa-mae-gamer" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1625842268584-8f3296236761?auto=format&fit=crop&w=700&q=80"
                                    alt="Fonte">

                                <span class="tag-produto">
                                    650W
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>Fonte 650W</h3>

                                <p>
                                    Energia estável e segura
                                    para seu computador.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 399,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=fonte-650w" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>

                        <article class="produto-card">

                            <div class="produto-imagem">

                                <img src="https://images.unsplash.com/photo-1547394765-185e1e68f34e?auto=format&fit=crop&w=700&q=80"
                                    alt="Monitor">

                                <span class="tag-produto">
                                    FULL HD
                                </span>

                            </div>


                            <div class="produto-info">

                                <h3>Monitor 24"</h3>

                                <p>
                                    Imagens nítidas para trabalho
                                    e entretenimento.
                                </p>


                                <div class="produto-final">

                                    <div>

                                        <small>Preço</small>

                                        <strong>
                                            R$ 899,90
                                        </strong>

                                    </div>


                                    <a href="compras.php?produto=monitor-24" class="botao-comprar">
                                        Comprar
                                    </a>

                                </div>

                            </div>

                        </article>


                    </div>

                </section>

            </div>


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

</body>

</html>