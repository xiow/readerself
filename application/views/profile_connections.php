	<nav>
		<ul class="actions">
			<li><a href="<?php echo base_url(); ?>profile"><i class="icon icon-step-backward"></i><?php echo $this->lang->line('back'); ?></a></li>
			<li><a href="<?php echo base_url(); ?>profile/logout_purge"><i class="icon icon-signout"></i><?php echo $this->lang->line('logout_purge'); ?></a></li>
		</ul>
	</nav>
</header>
<main>
	<section>
		<section>

	<article class="title">
		<h2><i class="icon icon-signin"></i><?php echo $this->lang->line('active_connections'); ?></h2>
	</article>

	<?php if($connections) { ?>
		<?php foreach($connections as $cnt) { ?>
		<?php list($date, $time) = explode(' ', $cnt->cnt_datecreated); ?>
			<article<?php if($this->member->token_connection == $cnt->token_connection) { ?> class="item-selected"<?php } ?>>
				<h2><i class="icon icon-signin"></i><?php echo $cnt->cnt_agent; ?></h2>
				<ul class="item-details">
					<li><i class="icon icon-bolt"></i><?php echo $cnt->cnt_ip; ?></li>
					<li><i class="icon icon-calendar"></i><?php echo $date; ?></li>
					<li><i class="icon icon-time"></i><?php echo $time; ?> (<span class="timeago" title="<?php echo $this->readerself_library->timezone_datetime($cnt->cnt_datecreated); ?>"></span>)</li>
					<?php if($this->member->token_connection == $cnt->token_connection) { ?><li><strong><?php echo $this->lang->line('current_connection'); ?></strong></li><?php } ?>
				</ul>
			</article>
		<?php } ?>
	<?php } ?>
		</section>
	</section>
</main>
