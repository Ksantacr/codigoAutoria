<?php

use Cake\ORM\TableRegistry;
$id_user = $_SESSION['Auth']['User']['id'];
$wallets = TableRegistry::get('Wallets');

$wallet = $wallets
    ->find()
    ->where(['users_id =' => $id_user])
    ->toArray();



?>
        <nav class="navbar navbar-default navbar-fixed-top">

                    <div class="navbar-header">
                        <a href="./home"><img src=" ../img/logoBiN.png" alt="logo" href="./home" width="150px" height="60px"></a>
                    </div>

                    <ul class="nav navbar-nav">
                        <li><a href="./home">Inicio</a></li>
                        <li><a href="./perfil">Perfil</a></li>
                        <li><a href="./historial">Historial</a></li>
                        <li><a href="./recargar">Recargar</a></li>
                        <li class="active"><a href="./retirar">Retirar</a></li>
                    </ul>

                    <a href="./logout" style="float:right;margin:1em;color:black">Cerrar sesión</a>

                    <div id="navbar" class="navbar-collapse collapse">


                    </div>
                    <!--/.navbar-collapse -->
        </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>-</h1>
                <div class="row panel">
                    <div class="col-xs-12">
                        <span>Retirar</span>
                    </div>
                </div>

                <form class="cuerpo-formulario">
                    <div class="form-group">
                        <div>

                            <img class="imgcoin" src="../img/coin.png">
                            <label class="coins" id="coins"><?php echo $wallet[0]->amount; ?></label>
                        </div>

                        <div>
                            <label>Valor a Retirar</label>
                            <input type="text" class="form-control"placeholder="1000" id="cantidad">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-lg btn-success" id="transaccion">Aceptar</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">

                    <div id="mensaje"></div>
                </div>

            </div>
        </div>

    </div>

<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('script_retirar'); ?>