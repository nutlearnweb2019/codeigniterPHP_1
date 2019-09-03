<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>	
</head>
<body>
    <?php echo heading("Home_view",1); ?>
	<hr>

    <h1 id="font-red">CodeIgniter Begin</h1>
	<hr>

	<img src="<?php echo base_url('images'); ?>/exit_Web1.png" alt="Exit" width="200">
		<?php echo br(2); ?>
	
	<a href="<?php echo site_url('CItest'); ?>" >Back To Hello Page</a>
		<?php echo nbs(10); ?>
	<a href="<?php echo site_url('Welcome'); ?>">Back To Welcome Page</a>
	
</body>
</html>