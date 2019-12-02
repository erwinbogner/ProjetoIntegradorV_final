        <article class="artigoGeral sect1">
            <div id="artigo" class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 artigonovi">               
                    <h1 class="artigoh1"> Novidades</h1>                    
                    <p> Aqui temos uma obra Renascentisma muito conhecida!</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 artigoinfo">               
                    <h1 class="artigoh1"> Informações</h1>
                    <div class="artigoobra1">
                        Obra 1
                    </div>
                    <div class="artigoobra2">
                        Obra 2
                    </div>
                    <div class="artigoobra3">
                        Obra 3
                    </div>
                </div>
                <div class=" col-xs-3 col-sm-4 col-md-4 col-lg-4 artigocale">               
                    <h3 class="artigoh3"> Calendário Exposições</h3>
                    
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Evento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                            $handle = fopen( 'log.txt', 'r');
                            $cont=0;
                            $A30s=0;
                            $D30s=0;
                            while (!feof($handle)){
                                $linha = fgets($handle,1024);
                                if ( strlen( trim($linha))>0){
                                    $alinha=explode( '|',$linha);
                                    $hora=$alinha[2].':'.$alinha[3].':'.$alinha[4];
                                    
                                    echo "<tr>
                                        <td>{alinha[0]}</td>
                                        <td>{alinha[1]}</td>
                                    </tr>";

                                }                                
                            }
                            fclose($handle);
                        ?>


                        <!--
                        <tr>
                            <td>Outubro</td>
                            <td>Exposição Adriá Juliá na Pinacoteca.</td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>Mostra de Fernanda Gomes, León Ferrari e Gravura Social Moderna na Pinacoteca.</td>
  
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mostra de Lucia Laguna no galpão Fortes D’Aloia & Gabriel.</td>

                        </tr>
                    
                        <tr>
                            <td>Novembro</td>
                            <td>Mostra de Anna Bella Geiger no MASP.</td>
 
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mostra de Marcia Pastore na Pinacoteca.</td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>Mostra Retratos – Adriana Varejão, Laura Lima, Valeska Soares na galeria Fortes D’Aloia & Gabriel.</td>
 
                        </tr>
                        <tr>
                            <td>Dezembro</td>
                            <td>Mostras de Leonor Antunes e Gego no MASP.</td>
 
                        </tr>
                        !-->
                    </tbody>    
                    </table>
                                
                                        
                    

                </div>
                
            </div>
        </article>
        
        