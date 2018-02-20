<?php
/**
* 数字分页函数
* 因为wordpress默认仅仅提供简单分页
* 所以要实现数字分页，需要自定义函数
* @Param int $range            数字分页的宽度
* @Return string|empty        输出分页的HTML代码        
*/
function lingfeng_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
        echo "<div class='mdui-btn-group' style='margin:10px;'>"; 
        if( !$paged ){
            $paged = 1;
        }
        echo "<a href='".get_pagenum_link(1) ."' class='mdui-btn mdui-color-grey-800' style='margin:2px;' title='跳转到首页'>首页</a>";
        previous_posts_link("<font class='mdui-btn mdui-color-grey-800' style='margin:2px;'>上一页</font>");
        if ( $max_page >$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    echo "<a style='margin:2px;' class='mdui-btn' href='".get_pagenum_link($i) ."'";
                    echo " class='mdui-btn mdui-color-grey-800'";echo ">$i</a>";
                }
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    echo "<a style='margin:2px;' href='".get_pagenum_link($i) ."'";
                    echo " class='mdui-btn mdui-color-grey-800'";echo ">$i</a>";
                    }
                    for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                        echo "<a style='margin:2px;' href='".get_pagenum_link($i) ."'";
						echo " class='mdui-btn mdui-color-grey-800'";echo ">$i</a>";
                    }
                }
                for($i = 1;$i <= $max_page;$i++){
                    echo "<a style='margin:2px;' href='".get_pagenum_link($i) ."'";
                    echo " class='mdui-btn mdui-color-grey-800'";echo ">$i</a>";
                }
        next_posts_link("<font style='margin:2px;' class='mdui-btn mdui-color-grey-800'>下一页</font>");
        echo "<a style='margin:2px;' href='".get_pagenum_link($max_page) ."' class='mdui-btn mdui-color-grey-800' title='跳转到最后一页'>尾页</a>";
        echo "</div>\n";  
}
?>