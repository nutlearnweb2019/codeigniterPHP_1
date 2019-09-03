<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form by Codeigniter</title>	
</head>
<body>
    <h1>Form Page Test</h1>
    <form action="<?php echo site_url('Form/show_Form'); ?>" method="post">
        Name: <input type="text" name="name" require placeholder="name">
        <?php echo br('2'); ?>
        Lastname: <input type="text" name="lastname" require placeholder="lastname"> 
        <?php echo br('2'); ?>
        <button type="submit">Save</button>
    </form>
    

</body>
</html>