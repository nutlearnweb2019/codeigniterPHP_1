<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>	
</head>
<body>
	<?php echo heading("Hello_view",1); ?>
	<hr>
	
	<?php echo br(2); ?>
	<img src="<?php echo base_url('images'); ?>/goto_Web1.png" alt="pic1" width="200px">
	<?php echo br(2); ?>

	<a href="<?php echo site_url('Home'); ?>">Link To Home_view</a>
		<?php echo br(4); ?>
	<a href="<?php echo site_url('Welcome'); ?>">Link To welcome_message</a>
	
	<h1>CodeIgniter Begin</h1>
	<hr>
	<h2>HTML Helper</h2>
		<?php echo br(5);?>
	<h3>Testing Tag: br</h3>
	<hr>
	<p>HTML Helper</p>
		<?php 
			echo heading("Test Tag: h1",1);
			echo heading("Test Tag: h2",2);
			echo heading("Test Tag: h3",3);
			echo heading("Test Tag: h4",4);
			echo heading("Test Tag: h5",5);
			echo heading("Test Tag: h6",6);
		?>
	<hr>
	<p>HTML Helper</p>
	<?php 
		echo "Testing Use:";
		echo nbs(10);
		echo "//การเว้นวรรค//";
	?>
	<hr>
	<?php echo heading("HTML Helper",3); ?>
	<p>Testing Tag: ol & ul</p>
		<?php 
			$list = array('number one','number two','number three','number four','number five');
			echo ol($list);
			echo "----------";
			echo ul($list);
		?>
	<hr>	
</body>
</html>