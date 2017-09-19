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
.wallets{
    display: none;
}
label{float: left;}
</style>
<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="wallets form large-9 medium-8 columns content">
    <?= $this->Form->create($wallet) ?>
    <fieldset>
        <legend><?= __('Add Wallet') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('amount');
            echo $this->Form->control('credit_card_id', ['options' => $creditcards]);
        ?>
    </fieldset>
    <button type="submit" id="terminar"></button>
    <!--<?= $this->Form->button(__('Submit')) ?>-->
    <?= $this->Form->end() ?>
</div>

<?php echo $this->Html->script('jquery'); ?>
<script>
    $(document).ready(function(){

        var lista_gente= document.getElementById("users-id");
    lista_gente.selectedIndex = lista_gente.length-1;

    var cc= document.getElementById("credit-card-id");
    cc.selectedIndex = cc.length-1;
    $("#amount").val(500);

    $("#terminar").click();

    })

</script>