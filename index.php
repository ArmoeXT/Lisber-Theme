<?php get_header(); ?>
<!-- Blog Post -->
	<div class="mdui-container-fluid">
		<div class="mdui-row">
			<div class="mdui-col-sm-7" style="padding:10px;">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" style="text-decoration:none;";>
				<a href="<?php the_permalink(); ?>" style="text-decoration:none;">
				<div class="mdui-card mdui-shadow-8" style="margin:10px;border-radius:8px;">
 				 <div class="mdui-card-media" style="padding:8px;">
 					<!-- Post Image -->
					<img class="mdui-shadow-5" style="border-radius:8px;height:200px;background-image:url('http://void.vsirs.com/img?<?php echo rand(1,999999999)?>');background-size:100%;"  />
				  </div>
				  <div class="mdui-card-actions">
						<div>
							<span class="mdui-color-blue-800 mdui-shadow-3" style="font-size:10px;padding:4px;border-radius:15px;margin-right:3px;"><i class="mdui-icon material-icons" style="font-size:14px;">person</i> <?php the_Author();?> </span>
							<span class="mdui-color-grey-800 mdui-shadow-3" style="font-size:10px;padding:4px;border-radius:15px;margin-right:3px;"><i class="mdui-icon material-icons" style="font-size:14px;">access_time</i> <?php the_time("Y-m-d");?></span>
						</div>
						<!-- Post Title -->
					   <h3 class="title mdui-text-color-grey-800"><?php the_title(); ?></h3>
						<!-- Post Content -->
						<div class="mdui-text-color-grey-800" style="color:red;"><?php the_excerpt('more'); ?></div>
				  </div>
				</div>
				</a>
			</div>
			<div class="hr clearfix"> </div>
			<?php endwhile; ?>
			<!-- Blog Navigation -->
			<?php lingfeng_pagenavi();?>
			<?php else : ?>
			<h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
			<p>没有找到任何文章！</p>
			<?php endif; ?>
		</div>
		<div class="mdui-col-sm-5" style="padding:10px;">
			<?php get_sidebar();?>
		</div>
	</div>
	</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer();?>