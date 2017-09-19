<div style="margin-top: 200px;"></div>

<?php
use Cake\ORM\TableRegistry;


$id_user = $_SESSION['Auth']['User']['id'];
//echo "-->".$id_user;
//echo "Soy el user_ ".$id_user;

//$users = TableRegistry::get('Users');
//$wallets = TableRegistry::get('Wallets');
//$creditCards = TableRegistry::get('Creditcards');
$bets_ = TableRegistry::get('Bets');
$matchs = TableRegistry::get('Matchs');
$teams = TableRegistry::get('Teams');
$tournaments = TableRegistry::get('Tournaments');
$bets = $bets_
    ->find()
    ->where(['users_id =' => $id_user])
    ->toArray();

//echo "-->".print_r($bets);

//echo "<br>Se viene el wallet";
//echo print_r($wallet[0]);

//echo "<br>FIND";

//$creditCard = $creditCards
//    ->find()
//    ->where(['id =' => $wallet[0]->credit_card_id])
//    ->toArray();

//echo print_r($wallet[0]->credit_card_id);
//echo print_r($creditCard->credit_card_id);

//$user = $users->get($id_user);

//echo print_r($user);
?>


<nav class="navbar navbar-default navbar-fixed-top">

            <div class="navbar-header">
                <a href="./home"><img src=" ../img/logoBiN.png" alt="logo" href="./home" width="150px" height="60px"></a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="./home">Inicio</a></li>
                <li><a href="./perfil">Perfil</a></li>

                <li class="active"><a href="./historial">Historial</a></li>
                <li><a href="./recargar">Recargar</a></li>
                <li><a href="./retirar">Retirar</a></li>
            </ul>

<a href="./logout" style="float:right;margin:1em;color:black">Cerrar sesión</a>


            <div id="navbar" class="navbar-collapse collapse">


            </div>


            <!--/.navbar-collapse -->
</nav>


       <div class="row" style="margin-top: 100px;">

        <div class="col-sm-8 col-sm-offset-3">

            <table class="historial" id="apuestas">
                <tr>
                    <th>ID Partida</th>
                    <th>Info</th>
                    <th>Torneo</th>
                    <th>Monedas</th>
                </tr>


<?php
foreach ($bets as $bet) {

    $monedas= $bet->amount;
    $id_match = $bet->matchs_id;
    //echo "<br>".$bet;
    $match_ = $matchs
    ->find()
    ->where(['id = '=> $bet->matchs_id])
    ->toArray();

    //echo "<br>".print_r($match);

    foreach ($match_ as $match) {

            //echo $match;


            $tournament = $tournaments
            ->find()
            ->where(['id = '=>$match->tournaments_id])
            ->toArray();

            $team_1  = $teams
            ->find()
            ->where(['id = '=> $match->first_team_id])
            ->toArray();


            $team_2  = $teams
            ->find()
            ->where(['id = '=> $match->second_team_id])
            ->toArray();

            //$nombre_torneo = $tournament[0]->name;
            //$equipo_1_nombre=  $team_1[0]->name;
            //$equipo_2_nombre=  $team_2[0]->name;
            //echo "torneo: ".;
            //echo  ." vs ".$team_2[0]->name."<br>";


?>

<tr class="filaReciente">
                    <td><?php echo $id_match ?></td>
                    <td><?php echo $team_1[0]->name." vs ".$team_2[0]->name?></td>
                    <td><?php echo $tournament[0]->name ?> </td>
                    <td><?php echo $monedas ?></td>
                    <!--<td>500</td>
                    <td>Jugando</td>-->
                </tr>



  <?php  }} ?>



                <!--<tr class="filaReciente">
                    <td>10092</td>
                    <td>Elite Wolfs vs Tunder Awaken</td>
                    <td>WCA</td>
                    <td>300</td>
                    <td>500</td>
                    <td>Jugando</td>
                </tr>
                <tr class="filaReciente">
                    <td>10093</td>
                    <td>Elite Wolfs vs Tunder Awaken</td>
                    <td>WCA</td>
                    <td>300</td>
                    <td>500</td>
                    <td>Ganada</td>
                </tr>
                <tr class="filaReciente">
                    <td>10094</td>
                    <td>Elite Wolfs vs Tunder Awaken</td>
                    <td>WCA</td>
                    <td>300</td>
                    <td>500</td>
                    <td>Perdida</td>
                </tr>-->

                </table>
            <section>

            </section>
            </div>

    </div>

