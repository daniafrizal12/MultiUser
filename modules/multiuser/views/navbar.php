<?php if($pengguna->level == "1") { ?>
	Administrator
	<a href="<?php echo site_url('login/logout');?>">Logout</a>
	<a href="<?php echo site_url('menu1');?>">menu1</a>	

<?php } else if($pengguna->level == "2") { ?>
	author
	<a href="<?php echo site_url('login/logout');?>">Logout</a>
<?php } else { ?>
	subcribe
	<a href="<?php echo site_url('login/logout');?>">Logout</a>
<?php } ?>
