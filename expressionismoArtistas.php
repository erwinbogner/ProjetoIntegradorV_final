<!DOCTYPE html>
<html lang="pt-br">
<?php include('includes/head.php'); ?>
<title>LOSELLEN - Expressionismo</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <?php include('includes/header.php'); ?>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-12 shadow-sm">
                <nav>
                    <?php include('includes/menu.php'); ?>
                </nav>
            </div>
        </div>
        <article class="text-">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 shadow-sm">
                    <nav>
                        <ul class="menuEXPR">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="expressionismoHist.php">HISTORIA</a></li>
                            <li><a href="expressionismoArtistas.php">ARTISTAS</a></li>
                            <li><a href="expressionismoObras.php">OBRAS</a></li>
                        </ul>
                    </nav>
                </div>
                <!--<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 align-self-center artigoexpr">!-->
                <!--<h4 class="text-center mt-2">Principais Artistas do Expressionismo</h4>!-->
                <!--<div class="table table-striped col-xs-10 col-sm-10 col-md-10 col-lg-10 col-sd-offset-2 col-md-offset-2 col-lg-offset-2 table-bordered artigoexpr mt-2">!-->
                <div class="table table-striped col-xs-9 col-sm-9 col-md-9 col-lg-9 table-bordered artigoexpr">
                    <h3 class="text-center mt-2">Principais Artistas do Expressionismo</h3>
                    Selecionamos alguns dos principais representantes da arte expressionista e do pós-impressionismo (que foram os grandes inspiradores e precursores do Expressionismo). Veja:
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Artista</th>
                                <th>Viveu</th>
                                <th>Principal contribuição</th>
                                <th>Referencias</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                setlocale(LC_ALL, "en_US.UTF-8");
                                $handle = fopen( 'ExpressionismoART.txt', 'r');
                                $cont=0;
                                $A30s=0;
                                $D30s=0;
                                while (!feof($handle)){
                                $linha = fgets($handle,1024);
                                if ( strlen( trim($linha))>0){
                                $alinha=explode( '|',$linha);
                                echo "<tr>
                                    <td>{$alinha[0]}</td>
                                    <td>{$alinha[1]}</td>
                                    <td>{$alinha[2]}</td>
                                    <td>{$alinha[3]}</td>
                                </tr>";
                                }
                                }
                                fclose($handle);
                                ?>
                            <!--
                                <tr>
                                    <td>Max Ernst</td>
                                    <td>(1891-1976)</td>
                                    <td>Inventou a técnica <spam>frottage</spam> ou "friccionar".</td>
                                </tr>
                                <tr>
                                    <td>Joan Miró</td>
                                    <td>(1893-1983)</td>
                                    <td>Mesmo em estado de alucinação sua composição é altamente organizada.</td>
                                </tr>
                                <tr>
                                    <td>René Magritte</td>
                                    <td>(1898-1967)</td>
                                    <td>Suas imagens pareciam convencionais mastinham carater bizarro por sobreposições.</td>
                                </tr>
                                <tr>
                                    <td>Salvador Dali</td>
                                    <td>(1904-1989)</td>
                                    <td>Interessava-se por condições mentais anormais, por alucinações.</td>
                                </tr>
                                
                                <tr>
                                    <td>Marc Chagall</td>
                                    <td>(1887-1985)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Paul Klee</td>
                                    <td>(1879-1940)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Wassily Kandinsky</td>
                                    <td>(1866-1944)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Amedeo Modigliani</td>
                                    <td>(1884-1920)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Egon Schiele</td>
                                    <td>(1890-1918)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Edvard Munch</td>
                                    <td>(1863-1944)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>José Orozco</td>
                                    <td>(1883-1949)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Constant Permeke</td>
                                    <td>(1886-1952)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Cândido Portinari</td>
                                    <td>(1903-1962)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Anita Malfatti</td>
                                    <td>(1889-1964)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Diego Rivera</td>
                                    <td>(1886-1957)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Georges Rouault</td>
                                    <td>(1871-1958)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Chaim Soutine</td>
                                    <td>(1893-1943)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>David Siqueiros</td>
                                    <td>(1896-1974)</td>
                                    <td>x</td>
                                </tr>
                                <tr>
                                    <td>Vincent Van Gogh</td>
                                    <td>(1853-1890)</td>
                                    <td>x</td>
                                </tr>
                                !-->
                        </tbody>
                    </table>
                </div>
            </div>
        </article>
    </div>
    <div class="row">
        <div class="col-12">
            <?php include('includes/footer.php'); ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
