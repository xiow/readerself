	<nav>
		<ul class="actions">
			<li><a href="<?php echo base_url(); ?>subscriptions"><i class="icon icon-step-backward"></i><?php echo $this->lang->line('back'); ?></a></li>
		</ul>
	</nav>
</header>
<aside>
	<ul>
		<?php if($last_added) { ?>
		<li class="static"><h2><i class="icon icon-bookmark-empty"></i><?php echo $this->lang->line('last_added'); ?></h2></li>
			<?php foreach($last_added as $added) { ?>
			<li<?php if($added->sub_direction) { ?> dir="<?php echo $added->sub_direction; ?>"<?php } else if($added->fed_direction) { ?> dir="<?php echo $added->fed_direction; ?>"<?php } ?>><a style="background-image:url(https://www.google.com/s2/favicons?domain=<?php echo $added->fed_host; ?>&amp;alt=feed);" class="favicon" href="<?php echo base_url(); ?>subscriptions/read/<?php echo $added->sub_id; ?>"><?php echo $added->fed_title; ?></a></li>
			<?php } ?>
		<?php } ?>
	</ul>
</aside>
<main>
	<section>
		<section>

	<article class="title">
		<h2><i class="icon icon-bookmark"></i><?php echo $this->lang->line('subscriptions'); ?></h2>
	</article>

	<article<?php if($sub->sub_direction) { ?> dir="<?php echo $sub->sub_direction; ?>"<?php } else if($sub->fed_direction) { ?> dir="<?php echo $sub->fed_direction; ?>"<?php } ?>>
		<ul class="actions">
			<li><a class="priority" href="<?php echo base_url(); ?>subscriptions/priority/<?php echo $sub->sub_id; ?>"><span class="priority"<?php if($sub->sub_priority == 0) { ?> style="display:none;"<?php } ?>><i class="icon icon-flag"></i><?php echo $this->lang->line('not_priority'); ?></span><span class="not_priority"<?php if($sub->sub_priority == 1) { ?> style="display:none;"<?php } ?>><i class="icon icon-flag-alt"></i><?php echo $this->lang->line('priority'); ?></span></a></li>
			<li><a href="<?php echo base_url(); ?>subscriptions/update/<?php echo $sub->sub_id; ?>"><i class="icon icon-wrench"></i><?php echo $this->lang->line('update'); ?></a></li>
			<li><a href="<?php echo base_url(); ?>subscriptions/delete/<?php echo $sub->sub_id; ?>"><i class="icon icon-bookmark"></i><?php echo $this->lang->line('unsubscribe'); ?></a></li>
		</ul>
		<h2 style="background-image:url(https://www.google.com/s2/favicons?domain=<?php echo $sub->fed_host; ?>&amp;alt=feed);" class="favicon"><?php echo $sub->fed_title; ?><?php if($sub->sub_title) { ?> / <em><?php echo $sub->sub_title; ?></em><?php } ?></h2>
		<ul class="item-details">
			<?php if($sub->fed_lastcrawl) { ?><li><i class="icon icon-truck"></i><?php echo $sub->fed_lastcrawl; ?></li><?php } ?>
			<li><i class="icon icon-group"></i><?php echo $sub->subscribers; ?> <?php if($sub->subscribers > 1) { ?><?php echo mb_strtolower($this->lang->line('subscribers')); ?><?php } else { ?><?php echo mb_strtolower($this->lang->line('subscriber')); ?><?php } ?></li>
			<li class="hide-phone"><a href="<?php echo $sub->fed_link; ?>" target="_blank"><i class="icon icon-rss"></i><?php echo $sub->fed_link; ?></a></li>
			<?php if($this->config->item('folders')) { ?>
				<li><?php if($sub->flr_title) { ?><a href="<?php echo base_url(); ?>folders/read/<?php echo $sub->flr_id; ?>"><i class="icon icon-folder-close"></i><?php echo $sub->flr_title; ?></a><?php } else { ?><i class="icon icon-folder-close"></i><em><?php echo $this->lang->line('no_folder'); ?></em><?php } ?></li>
			<?php } ?>
			<?php if($sub->fed_url) { ?><li class="block"><a href="<?php echo $sub->fed_url; ?>" target="_blank"><i class="icon icon-external-link"></i><?php echo $sub->fed_url; ?></a></li><?php } ?>
			<?php if($this->config->item('tags') && $sub->categories) { ?>
			<li class="block hide-phone"><i class="icon icon-tags"></i><?php echo implode(', ', $sub->categories); ?></li>
			<?php } ?>
			<?php if($sub->fed_lasterror) { ?><li class="block"><i class="icon icon-bell"></i><?php echo $sub->fed_lasterror; ?></li><?php } ?>
		</ul>
		<div class="item-content">
			<?php echo $sub->fed_description; ?>
		</div>
	</article>

	<article>
	<h2><i class="icon icon-bar-chart"></i><?php echo $this->lang->line('statistics'); ?></h2>
	<ul class="item-details">
		<li>*<?php echo $this->lang->line('last_30_days'); ?></li>
	</ul>
	<div class="item-content">
		<?php echo $tables; ?>
	</div>
	</article>
		</section>
	</section>
</main>
