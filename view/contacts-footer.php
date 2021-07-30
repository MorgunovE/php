<?
$phone = new CController();
$arContacts = $phone->GetContacts();
//pr($arContacts);
?>
<div class='info-single-item d-flex flex-wrap mb-30'>
  <div class='content'><p><?=$arContacts[0]['addres']?><br/><?=$arContacts[1]['addres']?></p></div>
</div>
<div class='info-single-item d-flex flex-wrap mb-30'>
  <div class='content'><p><?=$arContacts[0]['email']?><br/><?=$arContacts[1]['email']?></p></div>
</div>
<div class='info-single-item d-flex flex-wrap mb-30'>
  <div class='content'><p><?=$arContacts[0]['phone']?><br/><?=$arContacts[1]['phone']?></p></div>
</div>
<div class='info-single-item d-flex flex-wrap mb-30'>
  <div class='content'><p><?=$arContacts[0]['text']?><br/><?=$arContacts[1]['text']?></div>
</div>
