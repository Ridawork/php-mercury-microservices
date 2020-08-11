<?php
return array("/rest/products/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\RestProductsController","action"=>"delete","parameters"=>array("*"),"name"=>"RestProductsController-delete","cache"=>false,"duration"=>false)),"/rest/products/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestProductsController","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"RestProductsController-get","cache"=>false,"duration"=>false)),"/rest/products/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\RestProductsController","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"RestProductsController-getOne","cache"=>false,"duration"=>false)),"/rest/products/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\RestProductsController","action"=>"update","parameters"=>array("*"),"name"=>"RestProductsController-update","cache"=>false,"duration"=>false)),"/rest/products/add/"=>array("post"=>array("controller"=>"controllers\\RestProductsController","action"=>"add","parameters"=>array(),"name"=>"RestProductsController-add","cache"=>false,"duration"=>false)),"/rest/products/(index/)?"=>array("controller"=>"controllers\\RestProductsController","action"=>"index","parameters"=>array(),"name"=>"RestProductsController-index","cache"=>false,"duration"=>false),"/rest/products/connect/"=>array("controller"=>"controllers\\RestProductsController","action"=>"connect","parameters"=>array(),"name"=>"RestProductsController-connect","cache"=>false,"duration"=>false));
