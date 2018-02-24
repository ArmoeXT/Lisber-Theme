<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/style.css">
<script src="http://cdn.bootcss.com/mdui/0.4.0/js/mdui.min.js"></script>
</head>

<body class="mdui-color-grey-200">
<div id="page" class="site">
	<div class="mdui-toolbar mdui-shadow-2 mdui-text-color-pink-800" style="background:#FFFFFF;">
	  <span class="mdui-typo-title"><?php echo bloginfo('name');?></span>
	  <div class="mdui-toolbar-spacer"></div>
	  <a href="wp-admin" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">person</i></a>
	  <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></a>
	</div>