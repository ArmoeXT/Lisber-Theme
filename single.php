<?php get_header();?>
	<div class="mdui-shadow-5 mdui-text-color-grey-800" style="border-radius:8px;margin:10px;padding:5px 2px;background:#FEFEFE;">
		<h2 style="padding:8px;font-size:28px;" class="mdui-text-center mdui-text-color-pink-800"><?php the_title();?></h2>
		<div class="lisber-single-header" style="margin:0 8px;">
			<center>
			日期：<?php the_time("Y-m-d");?> | 评论：<?php comments_popup_link('0', '1 ', '%', '', '已关闭');?> | <?php the_tags();?>
			</center>
		</div>
		<?php while ( have_posts() ) : the_post();?>
		<div class="lisber-single-passage">
			<?php the_content(); ?>
		</div>
		<? endwhile;?>
	</div>
<?php get_sidebar();?>
<?php get_footer();?>