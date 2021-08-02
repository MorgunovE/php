<?php
//  pr ( $arParams );
//  45
//  pr ( $_REQUEST );
  $options = new CController();
  $all_options = $options -> GetAllOptions ();
//  pr ( $_REQUEST );
//  pr ( $All_options );
//  46
  if(isset($_POST['save-options'])) {
  foreach ($all_options as $option) {
    $new_value = $_POST[$option['name']];
    if($option['value'] != $new_value) {
      $option->SetOptions($option['name'], $new_value);
    }
  }
    echo 'Options saved';
  }
?>
<style>
  input{
      width: 250px;
      height: 25px;
  }
</style>
<h2>Correct options</h2>

<form action="" method="post">
  <? foreach ($all_options as $option) {?>
  <label for="<?=$option['name']?>"><?=$option['name']?></label><br/>
  <input type="text" name="<?=$option['name']?>" id="<?=$option['name']?>" value="<?=$option['value']?>">
  <br/><br/>
  <?}?>
  <input type="submit" name="save-options" value="Save">
  
</form>