<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       editResources.php                                           ##
##  Developed by:  aggenkeech                                                  ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2012. All rights reserved.                ##
##                                                                             ##
#################################################################################

include_once("validateMultihunterSession.php"); 

$id = $_POST['did'];

mysql_query("UPDATE ".TB_PREFIX."vdata SET 
	wood  = '".$_POST['wood']."', 
	clay  = '".$_POST['clay']."', 
	iron  = '".$_POST['iron']."', 
	crop  = '".$_POST['crop']."', 
	maxstore  = '".$_POST['maxstore']."', 
	maxcrop   = '".$_POST['maxcrop']."' 
	WHERE wref = '".$id."'") or die(mysql_error());

// header("Location: ../../../Admin/admin.php?p=village&did=".$id."");

$url = $_SERVER['HTTP_REFERER'];
$data = parse_url($url);

header('Location: '.$data['path'].'?p=village&did='.$id);
?>