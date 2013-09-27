</header>
<main>
	<section>
		<section>
	<article>
	<h2><i class="icon icon-bar-chart"></i><?php echo $this->lang->line('statistics'); ?></h2>
	<ul class="item-details">
		<li>*<?php echo $this->lang->line('last_30_days'); ?></li>
	</ul>
	<div class="item-content">
		<p>From your <strong><?php echo $subscriptions_total; ?> subscriptions,</strong> over the <strong>last 30 days</strong> you <strong>read <?php echo $read_items_30; ?> items</strong> and <strong>starred <?php echo $starred_items_30; ?> items</strong>.</p>
	<?php if($date_first_read) { ?>
		<p>Since <strong><?php echo $date_first_read_nice; ?></strong> you have <strong>read a total of <?php echo $read_items_total; ?> items</strong> and <strong>starred a total of <?php echo $starred_items_total; ?> items</strong>.</p>
	<?php } ?>

		<?php echo $tables; ?>
	</div>
	</article>
		</section>
	</section>
</main>
