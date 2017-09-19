<head>
    <style type="text/css">
        *{color:black!important;}
        .pie-pagina{color:white!important;}

    </style>
</head>

<?php
use Cake\ORM\TableRegistry;

$matchs = TableRegistry::get('Matchs');
$teams = TableRegistry::get('Teams');
$tournaments = TableRegistry::get('Tournaments');
// Start a new query.
$query = $matchs->find();
?>

    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">

            <div class="navbar-header">
                <a href="./home"><img src="../img/logoBiN.png" alt="logo" href="#" width="150px" height="60px"></a>
            </div>

            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="./perfil">Perfil</a></li>

                <li><a href="./historial">Historial</a></li>
                <li><a href="./recargar">Recargar</a></li>
                <li><a href="./retirar">Retirar</a></li>
            </ul>

            <a href="./logout" style="float:right;margin:1em">Cerrar sesión</a>

            <div id="navbar" class="navbar-collapse collapse">


            </div>

            <!--/.navbar-collapse -->
        </nav>

    </div>
    <div class="row">
        <div class="centrar" >
            <h3>Partidas</h3>
            <section class="box" style="margin-top: 40px;">
                    <article class="standard" id="bets">

                    <?php

foreach ($query as $match) {

$first_team_id = $match->first_team_id;
    $team_1 = $teams->get($first_team_id);
    $tournament_name = $tournaments->get($match->tournaments_id);
    //echo "Teams". $team_1. "<br>";


    $second_team_id = $match->second_team_id;
    $team_2 = $teams->get($second_team_id);

?>

                        <div class="matchmain">
                        <div class="matchheader">
        <div class="whenm">
            <span class="match-time"><?php echo $tournament_name->name?></span>
        </div>

    </div>
                            <div class="match">
                                <div class="matchleft">
                                <a href="./matchs/?match=<?php echo $match->id ?>">
                                        <div class="teamSpace">
                                            <img class="teamImg1" src="../img/<?php echo $team_1->imagen ?>">
                                            <div class="teamtext">
                                                <b><?php echo $team_1->name ?></b>
                                            </div>
                                        </div>
                                        <div class="vs">
                                            <span class="format"><?php echo $match->round ?></span><br>vs
                                        </div>
                                        <div class="teamSpace">
                                            <img class="teamImg2" src="../img/<?php echo $team_2->imagen ?>" >
                                            <div class="teamtext">
                                                <b><?php echo $team_2-> name ?></b>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <?php
}


?>
                    </article>
            </section>


            </div>


    </div>
        <!--/ footer -->
    <footer class="pie-pagina">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li><button type="button" class="btn btn-xs btn-link">Quienes somos</button></li>
                        <li><button type="button" class="btn btn-xs btn-link">Términos y condiciones de uso</button></li>
                        <li><button type="button" class="btn btn-xs btn-link">contáctenos</button></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="#" class="col-md-1 "><img src="../img/facebook.png" alt="Página de facebook"></a>

                            <a href="#" class="col-md-1"><img src="../img/twitter.png" alt="Página de twitter"></a>

                            <a href="#" class="col-md-1"><img src="../img/google-plus.png" alt="cuenta de Google"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
