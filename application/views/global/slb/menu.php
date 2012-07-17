
<ul class="menuHover">
	<li><?= anchor('/', 'Home') ?></li>
	<li><?= anchor('/creditor', 'Creditor Services') ?></li>
	<li><?= anchor('/debitor', ' Debitor Services') ?></li>
	<li><?= anchor('/factoring-invoice-discounting', 'Factoring & Invoice Discounting') ?>
	</li>

	<li><?= anchor('/asset-finance', 'Asset Finance') ?></li>

	<li><?= anchor('/collections', 'Collections') ?></li>
	<li><?= anchor('/debtcalc', 'Debt Calculator') ?></li>
	<li><?= anchor('/contact', 'Contact Us') ?></li>


	<?php
	$is_logged_in = $this->session->userdata('is_logged_in');
	$role = $this->session->userdata('role');
	if ($is_logged_in != 0 || $role == 1) {

		echo anchor('admin', 'Admin');
	}
	?>

</ul>
