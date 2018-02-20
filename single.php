<?php get_header();?>
	<div class="mdui-shadow-2 mdui-text-color-grey-800" style="margin:10px;padding:5px 2px;;background:#FEFEFE;">
		<h2 class="mdui-text-center"><?php the_title();?></h2>
		<div style="margin:0 8px;">
			<?php comments_popup_link("<div class='mdui-chip'><span class='mdui-chip-title'>0条评论</span></div>", "<div class='mdui-chip'><span class='mdui-chip-title'>1条评论</span></div>", "<div class='mdui-chip'><span class='mdui-chip-title'>% 条评论</span></div>", '', "<div class='mdui-chip'><span class='mdui-chip-title'>评论已关闭</span></div>"); ?></span>
			<?php the_tags('TAGS:','、', ''); ?>
		</div>
		<?php while ( have_posts() ) : the_post();?>
		<div>内容:<?php the_content(); ?></div>
		<? endwhile;?>
	</div>
<?php get_sidebar();?>
<?php get_footer();?>