<?php
return array("#tableName"=>"gift_card_transactions","#primaryKeys"=>array("giftcardtransactionid"=>"giftcardtransactionid"),"#manyToOne"=>array("giftcard"),"#fieldNames"=>array("giftcardtransactionid"=>"giftcardtransactionid","giftcard"=>"giftcardid"),"#memberNames"=>array("giftcardtransactionid"=>"giftcardtransactionid","giftcardid"=>"giftcard"),"#fieldTypes"=>array("giftcardtransactionid"=>"mixed","giftcard"=>false),"#nullable"=>array(),"#notSerializable"=>array("giftcard"),"#transformers"=>array(),"#accessors"=>array("giftcardtransactionid"=>"setGiftcardtransactionid","giftcardid"=>"setGiftcard"),"#joinColumn"=>array("giftcard"=>array("className"=>"models\\GiftCardAdmin","name"=>"giftcardid","nullable"=>false)),"#invertedJoinColumn"=>array("giftcardid"=>array("member"=>"giftcard","className"=>"models\\GiftCardAdmin")));
