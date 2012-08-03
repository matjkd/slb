<?php if(!isset($menu)) { $menu = "admin"; }?>

<ul class="menuHover">
	<li><?php if($menu == 'home') { ?> <span id="linkcurrent"> <?php } else { echo "<span>";}?><?= anchor('/', 'Home') ?></span></li>
	<li><?php if($menu == 'creditor') { ?> <span id="linkcurrent"> <?php } else { echo "<span>";}?><?= anchor('/creditor', 'Creditor Services') ?></span></li>
	<li><?php if($menu == 'debitor') { ?> <span id="linkcurrent"> <?php } else { echo "<span>";}?><?= anchor('/debitor', ' Debtor Services') ?></span></li>
	<li><?php if($menu == 'factoring-invoice-discounting') { ?> <span id="linkcurrent"> <?php } else { echo "<span>";}?><?= anchor('/factoring-invoice-discounting', 'Factoring & Invoice Discounting') ?></span>
	</li>

	

	<li><?php if($menu == 'collections') { ?> <span id="linkcurrent"> <?php } else { echo "<span>";}?><?= anchor('/collections', 'Collections') ?></span></li>
	<li><?php if($menu == 'debtcalc') { ?> <span id="linkcurrent"> <?php } else { echo "<span>";}?><?= anchor('/debtcalc', 'Debt Calculator') ?></span></li>
	<li><?php if($menu == 'contact') { ?> <span id="linkcurrent"> <?php } else { echo "<span>";}?><?= anchor('/contact', 'Contact Us') ?></span></li>


	<?php
	$is_logged_in = $this->session->userdata('is_logged_in');
	$role = $this->session->userdata('role');
	if ($is_logged_in != 0 || $role == 1) {

		echo anchor('admin', 'Admin');
	}
	?>

</ul>
