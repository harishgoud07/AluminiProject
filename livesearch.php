<?php
$p=$_GET["q"];
if(strlen($p)>0)
{
	$hint="";
}
if ($hint=="") 
{
  $response="no suggestion";
} else 
{
  $response=$hint;
}

echo $response;

?>