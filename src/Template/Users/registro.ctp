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

<?php
/**
  * @var \App\View\AppView $this
  */
?>

<nav class="navbar navbar-default navbar-fixed-top">

            <div class="navbar-header">
                <a href="#"><img src="../img/logoBiN.png" alt="logo" href="#" width="150px" height="60px"></a>
            </div>
    </nav>

<div class="login">
<h3>2. Datos de la cuenta</h3>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('status_id', ['options' => $status]);
            echo $this->Form->control('people_id', ['options' => $people]);
            echo $this->Form->control('roles_id', ['options' => $roles]);
            echo $this->Form->control('foto');
        ?>
    </fieldset>
    <!--<?= $this->Form->button(__('Submit')) ?>-->
    <button type="submit" class="btn_apostar">Siguiente >></button>
    <?= $this->Form->end() ?>
</div>


<?php echo $this->Html->script('jquery'); ?>
<script>
//document.getElementById()
$(document).ready(function(){

    var lista_gente= document.getElementById("people-id");
    lista_gente.selectedIndex = lista_gente.length-1;

    var lista_roles= document.getElementById("roles-id");
    lista_roles.selectedIndex = 1;

    var lista_estados= document.getElementById("status-id");
    //lista_estados.hidden = true;

    $("#foto").val("default.png").parent().hide();
    $(".select").hide();

    //$("#people-id").val(2);
})
</script>