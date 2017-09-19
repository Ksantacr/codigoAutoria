<head>
    <style type="text/css">
        *{color:black!important;}
        .pie-pagina{color:white!important;}

    </style>
</head>
<?php
use Cake\ORM\TableRegistry;

$id_match = $_GET['md'];
$id_team = $_GET['td'];
$cantidad = $_GET['a'];
$id_user = $_SESSION['Auth']['User']['id'];
$id_wallet = $_GET['w'];



$wallets = TableRegistry::get('Wallets');
$bets = TableRegistry::get('Bets');
$query = $wallets->query();

$wallet = $wallets->get($id_wallet);
$nueva_cantidad = $wallet->amount - $cantidad;

//echo "Restadar". $nueva_cantidad;

//echo "WAllet id". print_r($wallet);
$query->update()
    ->set(['amount' => $nueva_cantidad])
    ->where(['id' => $id_wallet])
    ->execute();


$query = $bets->query();
$query->insert(['amount', 'users_id', 'matchs_id', 'teams_id'])
    ->values([
        'amount' => $cantidad,
        'users_id' => $id_user,
        'matchs_id' => $id_match,
        'teams_id' => $id_team
    ])
    ->execute();

?>

<nav class="navbar navbar-default navbar-fixed-top">

            <div class="navbar-header">
                <a href="../home"><img src="../../img/logoBiN.png" alt="logo" href="../../home" width="150px" height="60px"></a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="../home">Inicio</a></li>
                <li><a href="../perfil">Perfil</a></li>
                <li><a href="../historial">Historial</a></li>
                <li><a href="../recargar">Recargar</a></li>
                <li><a href="../retirar">Retirar</a></li>
            </ul>
            <a href="./logout" style="float:right;margin:1em">Cerrar sesión</a>
            <div id="navbar" class="navbar-collapse collapse">


            </div>
            <!--/.navbar-collapse -->
</nav>

<div class="container">
        <div class="jumbotron text-center">
            <h1><?php echo ucfirst($username); ?></h1>
        <h1>¡Apuesta realizada exitosamente!</h1>
        <p class="lead">has apostado:</p>
        <h3><?php echo $cantidad; ?><span><img src="../../img/coin.png" alt="" width="25"></span></h3>
        <br>
        <a class="btn_apostar" href="../home" role="button">Aceptar</a>

      </div>
    </div>