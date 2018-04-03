<?php

function sidebar_menu($dbc, $pageid, $profileid){     # get and set data of sidebar menu of profile and settings
	
	$q = "SELECT * FROM sidebar_menu";				  #used in: template/sidebar.php
	$r = mysqli_query($dbc, $q);
	
	
	while ($menu = mysqli_fetch_assoc($r)) {
		if(($pageid == 'settings' && $menu['page'] == 'settings') || ($pageid != 'settings' && $menu['page'] != 'settings')){ ?>
			<li <?php if($profileid == $menu['slug']){ echo 'class="active"';} ?>>
				<a href="?page=<?php echo $pageid.'&profile='.$menu['slug']; ?>">
				<i class="<?php echo $menu['icon'];?>" aria-hidden="true"></i>
				<?php echo $menu['name'];?> </a>
			</li>		
	<?php }
	}
}

?>