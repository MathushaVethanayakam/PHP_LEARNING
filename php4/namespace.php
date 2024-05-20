<?php
	//namespace monitor;
	include 'monitor.php';
	include 'cpu.php';
	
	//use monitor\workprocess;
	use monitor as moni;
	$obj=new moni\workprocess();
	$obj->dowork();
	
	$obj1=new cpu\workprocess();
	$obj1->dowork();
	
	
?>