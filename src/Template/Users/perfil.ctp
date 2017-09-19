<head>
    <style type="text/css">
        *{color:black!important;}
        .pie-pagina{color:white!important;}

    </style>
</head>

<?php
use Cake\ORM\TableRegistry;

$id_user = $_SESSION['Auth']['User']['id'];

//echo "Soy el user_ ".$id_user;

$users = TableRegistry::get('Users');
$wallets = TableRegistry::get('Wallets');
$bets = TableRegistry::get('Bets');
$creditCards = TableRegistry::get('Creditcards');

$wallet = $wallets
    ->find()
    ->where(['users_id =' => $id_user])
    ->toArray();

$bet = $bets
    ->find()
    ->where(['users_id =' => $id_user])
    ->toArray();
//echo print_r($bet);


//echo "<br>Se viene el wallet";
//echo print_r($wallet[0]);

//echo "<br>FIND";

$creditCard = $creditCards
    ->find()
    ->where(['id =' => $wallet[0]->credit_card_id])
    ->toArray();

//echo print_r($wallet[0]->credit_card_id);
//echo print_r($creditCard->credit_card_id);

$user = $users->get($id_user);

//echo print_r($user);

?>
<nav class="navbar navbar-default navbar-fixed-top">

            <div class="navbar-header">
                <a href="./home"><img src=" ../img/logoBiN.png" alt="logo" href="./home" width="150px" height="60px"></a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="./home">Inicio</a></li>
                <li class="active"><a href="./perfil">Perfil</a></li>

                <li><a href="./historial">Historial</a></li>
                <li><a href="./recargar">Recargar</a></li>
                <li><a href="./retirar">Retirar</a></li>
            </ul>

            <a href="./logout" style="float:right;margin:1em">Cerrar sesión</a>


            <div id="navbar" class="navbar-collapse collapse">


            </div>
            <!--/.navbar-collapse -->
</nav>

<div class="row"  style="margin-top: 100px;">
        <div class="col-sm-4 col-sm-offset-1">
            <section class="box">
                    <article class="" id="">

                        <div class="info-principal">
                            <img src="../img/<?php echo $user->foto; ?>" width="100" height="100">
                            <h3><?php echo ucfirst($user->username); ?> </h3>
                        </div>

                        <div class="info">

                            <span>Apuestas realizadas: <?php echo count($bet);?></span><br>

                            <span>Monedas: <?php echo $wallet[0]->amount; ?></span>

                        </div>
                        <!--<div class="info-equipo-favorito">
                            <h3>Equipo favorito <span class="glyphicon glyphicon-pencil"></span></h3>
                            <img src="" alt="" width="45" height="45">
                            <span>Evil Geniuses</span>
                        </div>-->

                    </article>
            </section>
        </div>
            <div class="col-sm-4 col-sm-offset-1 ">
            <h3>Cartera </h3>

            <div class="info-cartera">

            <?php //echo print_r($creditCard);?>

                <span><?php echo $creditCard[0]->credit_number; ?></span><br>
                <span><?php echo $creditCard[0]->placeholder; ?></span><br>
                <span><?php echo $creditCard[0]->expiration_date; ?></span>
                <!--<br>
                <span><?php echo $creditCard[0]->credit_number; ?></span><br>
                <span>EC09112</span>-->



            </div>
            </div>

    </div>