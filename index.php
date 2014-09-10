<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

include("classes/Cliente.php");

$clientes = array(); //array de clientes

$clientes[1] = new Projeto01\Cliente("Maria da Graça", "123.456.789-78", "Av Central", "m@mail.com");
$clientes[2] = new Projeto01\Cliente("Eduardo Silva", "222.666.888-99", "Rua Cbcd", "ed@br.mail.com");
$clientes[3] = new Projeto01\Cliente("Jose da Silva", "123.456.789-11", "Alameda XPTO", "email@uol.com.br");
$clientes[4] = new Projeto01\Cliente("Paulo Batuta", "345.654.120-88", "Av SouzaLima", "batuta@hotmail.com");
$clientes[5] = new Projeto01\Cliente("Marlene Cilene", "123.765.998-99", "Av Centenário", "mc@ig.com.br");
$clientes[6] = new Projeto01\Cliente("Catarina Santos", "123.568.003-91", "Travessa do Carmo", "csantos@yahoo.com");
$clientes[7] = new Projeto01\Cliente("Joao John", "123.999.888-11", "Av dos Expedicionários", "john@mail.com");
$clientes[8] = new Projeto01\Cliente("Eulália Batista", "222.222.345-98", "Av Turmalina", "batista@r7.com");
$clientes[9] = new Projeto01\Cliente("Zuleide Aparecida", "111.111.111-11", "Rua Castello Branco", "zap@uol.com.br");
$clientes[10] = new Projeto01\Cliente("Cida Castanheira", "111.222.111-00", "Rua Gonçalves Dias", "cast@gmail.com");

//ordeno o array de clientes
if(isset($_POST['ordem'])){
    if($_POST['ordem'] == "asc")
        ksort($clientes);
    elseif($_POST['ordem'] == "desc")
        krsort($clientes);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POO - Fase01</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="container-fluid">
    <h1>Clientes cadastrados no sistema</h1>


    <form method="post" action="" class="form-horizontal">
        <fieldset>
            <label>Ordenar registros de forma:</label>
            <select name="ordem">
                <option value="asc" <?php if(isset($_POST['ordem']) and $_POST['ordem'] == "asc"){ echo "selected";  }else null; ?>>Ascendente</option>
                <option value="desc" <?php if(isset($_POST['ordem']) and $_POST['ordem'] == "desc"){ echo "selected";  }else null; ?> >Descendente</option>
            </select>
            <button type="submit" class="btn btn-warning" name="submit"><i class="icon-retweet icon-white"></i> Classificar</button>
        </fieldset>
    </form>
    <hr/>
    <div class="accordion" id="accordion2">        
        <?php foreach ($clientes as $key => $val) { ?>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="<?php echo '#collapse'.$key;?>">
                    <?php echo '<h4>Registro [ID: '.$key.'] </h4> <strong>Nome: </strong>'.$val->getNome();?>
                </a>
            </div>
            <div id="<?php echo 'collapse'.$key;?>" class="accordion-body collapse">
                <div class="accordion-inner">
                    <?php
                        echo '<strong>CPF: </strong>'.$val->getCPF().'<br/>';
                        echo '<strong>Endereço: </strong>'.$val->getEndereco().'<br/>';
                        echo '<strong>EMail: </strong>'.$val->getEmail().'<br/>';
                    ?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>

</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
