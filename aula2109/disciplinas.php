<?php include "cabecalho.php"; ?>

<?php
    $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas");
    $dados = json_decode($dados,true);

    ?>

    <div class="row">
        <div class="col-10 offset-1">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Sigla</th>
                        <th>Apelido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < count($dados); $i++) {

                    ?>

                                <tr>
                                    <td><?php echo $dados[$i]["disciplinaId"]; ?></td>
                                    <td><?php echo $dados[$i]["nome"]; ?></td>
                                    <td><?php echo $dados[$i]["sigla"]; ?></td>
                                    <td><?php echo $dados[$i]["apelido"]; ?></td>
                                    <td>
                                        <a class="btn btn-warning">Editar</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger">Excluir</a>
                                    </td>
                                </tr>

                            <?php
                            //echo "<tr>";
                            //echo "<td>";
                            //echo 
                            //echo "</td>";
                            //echo "<td>";
                            //echo $dados[$i]["nome"];
                            //echo "</td>";
                            //echo "<td>";
                            //echo $dados[$i]["sigla"];
                            //echo "</td>";
                            //echo "<td>";
                            //echo $dados[$i]["apelido"];
                            //echo "</td>";
                            //echo "</tr>";
                            
                        }
                             ?>
                    
                </tbody>
            </table>
        </div>
    </div>


    <?php

    echo "<h1>".$dados[0]["nome"]."</h1>";

    

    //echo "<pre>";
    //print_r($dados);
    //echo "</pre>";
?>

<?php include "rodape.php"; ?>