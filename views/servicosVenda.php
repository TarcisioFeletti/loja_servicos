<?php
require_once '../classes/servico.inc.php';
require_once '../dao/tipoDAO.inc.php';
require_once 'includes/autenticarMenu.inc.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$servicos = $_SESSION['servicos'];
$tipoDao = new TipoDAO();
$numPaginas = $_REQUEST['paginas'];
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h1>Serviços</h1>
    <p>
    <form class="form" action="../controlers/controlerServico.php" method="get">
        <?php
        if (isset($_SESSION['busca'])) {
            echo "<input type='text' class='centered' placeholder='Busca' size='80%' name='pBusca' value = " . $_SESSION['busca'] . " />";
        } else {
            echo "<input type='text' class='centered' placeholder='Busca' size='80%' name='pBusca' />";
        }
        ?>
        <input type="hidden" name="opcao" value="9">
        <input type="hidden" name="pagina" value="1">
        <input class="input_btn" type="submit" value="Buscar">
    </form>
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <?php
            foreach ($servicos as $servico) {
            ?>
                <a href="../controlers/controlerDiasDisponiveis.php?opcao=1&id=<?php echo $servico->get_id_servico() ?>">
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden" align="center">
                                <img src="imagens/produtos/<?php echo $servico->get_id_servico(); ?>.jpg" width="200" height="200" border="0">
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate"> <?php echo $servico->get_nome(); ?> </a>
                                <p class="espacamento_produto"></p>
                                <a class="h6 text-decoration-none text-truncate"> <?php echo $servico->get_descricao(); ?> </a>
                                <p class="espacamento_produto"></p>
                                <a class="h6 text-decoration-none text-truncate"> <?php echo $tipoDao->getTipo($servico->get_id_tipo())->get_nome(); ?> </a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5> R$ <?php echo $servico->get_valor(); ?> </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            <?php
            }
            ?>
        </div>
        <div align="center">
            <?php
            for ($i = 1; $i <= $numPaginas; $i++) {
                echo '<a class="paginacao_estilo" href="../controlers/controlerServico.php?opcao=7&pagina=' . $i . '">' . $i . '</a> ';
            }
            ?>
        </div>
    </div>
</div>
<?php
require_once 'includes/rodape.inc.php';
?>