
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
<?php
/**
  * @var \App\View\AppView $this
  */
?>


<div class="login">

<h3>3. Datos de la cuenta</h3>
    <?= $this->Form->create($creditcard) ?>
    <fieldset>
        <?php
            echo $this->Form->control('placeholder');
            echo $this->Form->control('credit_number');
            echo $this->Form->control('expiration_date');
            echo $this->Form->control('banks_id', ['options' => $banks]);
        ?>
    </fieldset>

    <button type="submit" class="btn_apostar">Finalizar</button>
   <!-- <?= $this->Form->button(__('Submit')) ?>-->
    <?= $this->Form->end() ?>
</div>
