<?php
require_once '../classes/cliente.inc.php';
require_once '../utils/dataUtil.inc.php';
require_once 'includes/autenticar.inc.php';
require_once 'includes/autenticarMenu.inc.php';
$cliente = $_SESSION['cliente'];
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Alteração dos Dados Cadastrais</h2>
    <p>

    <div class="login-page">
        <div class="form">
            <form action="../controlers/controlerCliente.php" method="post">
                Nome: <input type="text" size="50" name="pNome" value="<?php echo $cliente->get_nome() ?>" minlength="1" required maxlength="50">
                <p>Endereço: <input type="text" size="100" name="pEndereco" value="<?php echo $cliente->get_endereco() ?>" minlength="1" required maxlength="50">
                <p>Telefone: <input type="text" size="12" name="pTelefone" value="<?php echo $cliente->get_telefone() ?>" minlength="1" required maxlength="15">
                <p>Data de Nascimento: <input type="date" name="pData" value="<?php echo conversorData($cliente->get_dt_nascimento()) ?>" required>
                <p>CPF: <input type="text" size="12" name="pCpf" value="<?php echo $cliente->get_cpf() ?>" minlength="1" required maxlength="50">
                <p>E-mail: <input type="text" size="20" name="pEmail" value="<?php echo $cliente->get_email() ?>" minlength="1" required maxlength="20">
                <p>Senha: <input type="text" size="12" name="pSenha" value="<?php echo $cliente->get_senha() ?>" minlength="1" required maxlength="12">
                <p></p>

                <p><input type="submit" value="Atualizar"> <input type="reset" value="Cancelar">
                    <input type="hidden" name="pId" value="<?php echo $cliente->get_id_cliente() ?>">
                    <?php
                    if ($_SESSION['logado'] == true && $_SESSION['tipousuario'] == '1') {
                        echo '<input type="hidden" name="opcao" value="11">';
                    } else {
                        echo '<input type="hidden" name="opcao" value="3">';
                    }
                    ?>
            </form>
        </div>
    </div>


    <p>
</div>
<?php
require_once 'includes/rodape.inc.php';
?>