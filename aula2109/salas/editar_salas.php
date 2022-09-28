<?php include "../layout/cabecalho.php"; ?>

<?php
if(isset($_GET["Id"]) && !empty($_GET["Id"]))
{
    //echo "<h1>Id = ". $_GET["Id"]. "</h1>" ; 

    $dados = file_get_contents("https://reserva.fatectq.edu.br/api/salas/ById/".$_GET["Id"]);
    $dados = json_decode($dados,true);
    //echo "<pre>";
    //print_r($dados);
    //echo "</pre>";

} else {
    echo "<script>window.location.href='./disciplinas.php?erro=semid'</script>";
}
?>
<div class="row">
    <div class="col-4 offset-4">
        <form>
            <div class="form-group">
                <label>Id</label>
                <input type="text" name="Id" readonly="readonly" value="<?php echo $dados["salaId"];?>"
                class="form-control"/>
            </div>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome"  value="<?php echo $dados["nome"];?>"
                class="form-control"/>
            </div>
            <div class="form-group">
                <label>Sigla</label>
                <input type="text" name="sigla" value="<?php echo $dados["bloco"];?>"
                class="form-control"/>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-success" type="submit"> Salvar Sala </button>
            </div>
        </form>
    </div>
</div>


<?php include "../layout/rodape.php"; ?>