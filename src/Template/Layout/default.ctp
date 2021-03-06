<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'BetItNow';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <?php

    if(isset($_SESSION['Auth']['User']['roles_id']) && $_SESSION['Auth']['User']['roles_id']==2 ){
        ?>
        <?= $this->Html->css('bootstrap.min.css')?>
        <?= $this->Html->css('main.css')?>
<?php
    }else{?>

    <?= $this->Html->css('base.css')?>
    <?= $this->Html->css('cake.css')?>


    <?php } ?>


</head>
<body>
<?php if(isset($_SESSION['Auth']['User']['roles_id']) && $_SESSION['Auth']['User']['roles_id']==1){ ?>


    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li>
                    <?php
                    if($username){
                        echo $this->Html->link('Logout', ['controller'=> 'users', 'action'=>'logout']); }
                        ?>
                </li>
                <!--<li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>-->
            </ul>
        </div>
    </nav>
    <?php } ?>
    <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>
</body>
</html>
