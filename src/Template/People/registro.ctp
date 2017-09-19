<style>

.login{
  width: 500px;
  background: #333;
  border-radius: 1em;
  margin: 0 auto;
  margin-top: 3em;
}
h3{
  color: white !important;
  text-align: center;
  padding-top: .3em;
  padding: .5em;
}
form{
  width: 100%;
  background-color: #c1c1c1;
  padding: .1em;
  border-bottom-left-radius: 1em;
  border-bottom-right-radius: 1em;
  color: black !important;
  text-align: center;
}
.btn_apostar {
  display: inline-block;
    background: #619c41;
    color: white !important;
    margin: .5em;
    border: none;
    font-size: 1em;
  }
.btn_apostar:hover {
    background: #93ba44;
    color: white !important;
}
label{float: left;}
.sin_cuenta{margin: 0 auto;width: 500px; text-align: center;}
</style>
        <nav class="navbar navbar-default navbar-fixed-top">

            <div class="navbar-header">
                <a href="#"><img src="../img/logoBiN.png" alt="logo" href="#" width="150px" height="60px"></a>
            </div>

        </nav>

<div class="login">

<h3>1. Datos personales</h3>

<?php
/**
  * @var \App\View\AppView $this
  */
?>


    <!--<?= $this->Form->create($person) ?>-->
    <form method="post" accept-charset="utf-8" action="/autoria/people/registro">

    <fieldset>

    <input type="text" name="soy_nuevo" value="POST" id="nuevo" value="0" style="display: none;">
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('lastName');
            echo $this->Form->control('identificationCard');
            echo $this->Form->control('age');
            echo $this->Form->control('mail');
            echo $this->Form->control('genders_id', ['options' => $genders]);
            echo $this->Form->control('phone');
            echo $this->Form->control('countries_id', ['options' => $countries]);
        ?>
    </fieldset>
    <!--<?= $this->Form->button(__('Submit')) ?>-->
    <button type="submit" class="btn_apostar"> Siguiente >> </button>
    <!--<?= $this->Form->end() ?>-->
    </form>


  <!--<form method="post" accept-charset="utf-8" action="/autoria/users/login">

  <div style="display:none;">

  <input type="hidden" name="_method" value="POST">

  </div>
   <div class="input text">

   <label for="username">Username</label>

   <input type="text" name="username" id="username"></div>

   <div class="input password"><label for="password">Password</label>

   <input type="password" name="password" id="password">

   </div>
   <button type="submit" class="btn_apostar">Ingresar</button>
  </form>-->

</div>
<!--<div class="sin_cuenta">¿No tienes cuenta aún?.  <a href="./registro">Registrate</a>
</div>-->