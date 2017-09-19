<head>
    <style type="text/css">
        *{color:black!important;}
        .pie-pagina{color:white!important;}

    </style>
</head>
<?php
use Cake\ORM\TableRegistry;
$teams = TableRegistry::get('Teams');
$matchs = TableRegistry::get('Matchs');
$country = TableRegistry::get('Countries');
$sponsor = TableRegistry::get('Sponsors');
//$wallets = TableRegistry::get('Wallets');

$id_ = $_GET["match"];

$match = $matchs->get($id_);
$team_name = $teams->get($match->first_team_id);
$team_name2 = $teams->get($match->second_team_id);
$team_country = $country->get($team_name->countries_id);
$team_country2 = $country->get($team_name2->countries_id);
$team_sponsor = $sponsor->get($team_name->sponsors_id);
$team_sponsor2 = $sponsor->get($team_name2->sponsors_id);

//echo print_r($this->Auth->identify());
//echo $_SESSION['Auth']['User']['id'];
$id_user = $_SESSION['Auth']['User']['id'];
//$wallet = $wallets->get(1);

$wallet_id=0;
$query = TableRegistry::get('Wallets')->find();
$monedas = 0;
foreach ($query as $wallet) {
    //debug($article->title);
    if($wallet->users_id == $id_user){
     $monedas = $wallet->amount;
     $wallet_id = $wallet->id;
    }
}

//echo print_r($wallet);



//echo print_r($team_name);

//echo print_r($team_name->captainName);


$teams = TableRegistry::get('Teams');
$tournaments = TableRegistry::get('Tournaments');
// Start a new query.
$query = $matchs->find();
?>



<nav class="navbar navbar-default navbar-fixed-top">

            <div class="navbar-header">
                <a href="../home"><img src="../../img/logoBiN.png" alt="logo" href="#" width="150px" height="60px"></a>
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

<div class="monedas_usuario">Tienes: <span id="coins"><?php echo $monedas; ?></span><img src="../../img/coin.png" alt="" width="25"></div>


<form action="" class="eleccion_equipo">


<div class="row">
        <div class="col-sm-12 blog-main" >


<div class="partida_">


    <h3>Primer juego</h3>
    <div class="equipos">

    <div class="vs_">vs</div>

        <a href="" class="equipo_" id="equipo1">
            <div class="equipo_1">
                <img src="../../img/<?php echo $team_name->imagen?>" alt="">
                <h1 id="nombre_equipo_1"><?php echo $team_name->name?></h1>
            </div>
        </a>
        <a href="" class="equipo_" id="equipo2">
            <div class="equipo_2">
                <img src="../../img/<?php echo $team_name2->imagen?>" alt="">

                <h1 id="nombre_equipo_2"><?php echo $team_name2->name?></h1>
            </div>
        </a>
    </div>
    <div class="datos_apuesta">

        <label name="monedas"> Cantidad: <input type="number" id="monedas" placeholder="000"></label>
        <div class="equipo_seleccionado">

            <span>Equipo: <h2 id="equipo_seleccionado">-</h2></span>

        </div>

    </div>

</div>
<div id="mensaje"></div>
            </div>
</div>


<div class="row">
    <div class="col-sm-12 blog-main" >

        <h2 class="titulo_">Datos equipos</h2>
        <div class="datos">
            <div class="datos_equipo_1">

                <span>Capitan : <?php echo $team_name->captainName?></span>
                <span>Sponsor: <?php echo $team_sponsor->name?></span>
                <span>Pais: <?php echo $team_country->name?></span>


            </div>

            <div class="datos_equipo_2">

                <span>Capitan : <?php echo $team_name2->captainName?></span>
                <span>Sponsor: <?php echo $team_sponsor2->name?></span>
                <span>Pais: <?php echo $team_country2->name?></span>


            </div>
        </div>

    </div>

</div>
<div id="id_1" class="hidden"><?php echo $match->first_team_id; ?></div>
<div id="id_2" class="hidden"><?php echo $match->second_team_id; ?></div>

<div id="id_match" class="hidden">
    <?php echo $id_; ?>
</div>
<div id="wallet_id" class="hidden">
    <?php echo $wallet_id; ?>
</div>


<button class="btn_apostar" id="apostar">Apostar</button>

</form>
<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('script'); ?>