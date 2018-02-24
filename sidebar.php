<div class="mdui-card mdui-shadow-5 mdui-text-center" style="border-radius:8px;margin:10px;">
	<div class="mdui-card-actions" style="">
		<div class="mdui-color-pink-800 mdui-shadow-3" style="padding:10px;border-radius:8px;font-size:18px;">博客信息</div>
		<div class="mdui-shadow-6 mdui-color-green-600" style="padding:10px;border-radius:8px;margin-top:10px;">
			名称 · <?php bloginfo("name");?>
		</div>
		<div class="mdui-shadow-6 mdui-color-blue-grey-600" style="padding:10px;border-radius:8px;margin-top:10px;">
			介绍 · <?php bloginfo("description");?>
		</div>
		<div class="mdui-shadow-6 mdui-color-teal-600" style="padding:10px;border-radius:8px;margin-top:10px;">
			邮箱 · <?php bloginfo("admin_email");?>
		</div>
	</div>
</div>