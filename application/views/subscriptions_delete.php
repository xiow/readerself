	<nav>
		<ul class="actions">
			<li><a href="<?php echo base_url(); ?>subscriptions/read/<?php echo $sub->sub_id; ?>"><i class="icon icon-step-backward"></i><?php echo $this->lang->line('back'); ?></a></li>
		</ul>
	</nav>
</header>
<main>
	<section>
		<section>
	<article class="title">
		<h2><i class="icon icon-bookmark"></i><?php echo $this->lang->line('subscriptions'); ?></h2>
	</article>

	<article<?php if($sub->sub_direction) { ?> dir="<?php echo $sub->sub_direction; ?>"<?php } else if($sub->fed_direction) { ?> dir="<?php echo $sub->fed_direction; ?>"<?php } ?>>
		<ul class="actions">
			<li><a href="<?php echo base_url(); ?>subscriptions/update/<?php echo $sub->sub_id; ?>"><i class="icon icon-wrench"></i><?php echo $this->lang->line('update'); ?></a></li>
		</ul>
		<h2><a style="background-image:url(https://www.google.com/s2/favicons?domain=<?php echo $sub->fed_host; ?>&amp;alt=feed);" class="favicon" href="<?php echo base_url(); ?>subscriptions/read/<?php echo $sub->sub_id; ?>"><?php echo $sub->fed_title; ?><?php if($sub->sub_title) { ?> / <em><?php echo $sub->sub_title; ?></em><?php } ?></a></h2>
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

	<h2><i class="icon icon-bookmark"></i><?php echo $this->lang->line('unsubscribe'); ?></h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open(current_url()); ?>

	<p>
	<?php echo form_label($this->lang->line('confirm').' *', 'confirm'); ?>
	<?php echo form_checkbox('confirm', '1', FALSE, 'id="confirm" class="inputcheckbox"'); ?>
	</p>

	<p>
	<button type="submit"><?php echo $this->lang->line('send'); ?></button>
	</p>

	<?php echo form_close(); ?>

		</section>
	</section>
</main>
