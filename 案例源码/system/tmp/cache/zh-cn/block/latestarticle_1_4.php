<?php if(!defined('RUN_MODE')) die();?><div class='col' data-grid='4'><div id="block1" class='panel panel-block block-article-latestArticle'>
  <div class='panel-heading'>
    <strong><i class='icon panel-icon icon-list-ul'></i> 最新文章</strong>
    
  </div>
  
    <div class='panel-body'>
      <ul class='ul-list'>
        



          
          
          



          
            <li class='notDataList'>
              

              
              
              <a href='/index.php/article/3.html' title='利用蚁剑上线到CS远控工具' class='articleTitleB text-nowrap text-ellipsis pull-left' style='color:'>利用蚁剑上线到CS远控工具</a>




              <span class='pull-left sticky'></span>
            </li>
          
        



          
          
          



          
            <li class='notDataList'>
              

              
              
              <a href='/index.php/article/4.html' title='内网信息收集获取关键信息' class='articleTitleB text-nowrap text-ellipsis pull-left' style='color:'>内网信息收集获取关键信息</a>




              <span class='pull-left sticky'></span>
            </li>
          
        



          
          
          



          
            <li class='notDataList'>
              

              
              
              <a href='/index.php/article/5.html' title='windows电脑密码收集和破解' class='articleTitleB text-nowrap text-ellipsis pull-left' style='color:'>windows电脑密码收集和破解</a>




              <span class='pull-left sticky'></span>
            </li>
          
        



          
          
          



          
            <li class='notDataList'>
              

              
              
              <a href='/index.php/article/6.html' title='搭建socks隧道进入内网' class='articleTitleB text-nowrap text-ellipsis pull-left' style='color:'>搭建socks隧道进入内网</a>




              <span class='pull-left sticky'></span>
            </li>
          
        



          
          
          



          
            <li class='notDataList'>
              

              
              
              <a href='/index.php/article/2.html' title='CobaltStrike安装和生成木马' class='articleTitleB text-nowrap text-ellipsis pull-left' style='color:'>CobaltStrike安装和生成木马</a>




              <span class='pull-left sticky'></span>
            </li>
          
        



          
          
          



          
            <li class='notDataList'>
              

              
              
              <a href='/index.php/article/1.html' title='网络安全大师课' class='articleTitleB text-nowrap text-ellipsis pull-left' style='color:'>网络安全大师课</a>




              <span class='pull-left sticky'></span>
            </li>
          
        
      </ul>
    </div>
  
</div>

<style>
.ul-list .addDataList.withStick{padding-right:126px !important;}
.ul-list .addDataList.withoutStick{padding-right:80px !important;}
.ul-list .notDataList.withStick{padding-right:60px !important;}
.ul-list .notDataList.withoutStick{padding-right:5px !important;}
.articleTitleA{display:inline-block;}
.articleTitleB{display:inline-block;}
.sticky{padding-left: 5px;}
</style>
<script>

var currentBlockID = 1;


if(typeof($('#block' + currentBlockID).parent('.col').data('grid')) === 'undefined')
{
    var grid = $('#block' + currentBlockID).parents('.blocks').data('grid');
    grid = typeof(grid) == 'undefined' ? 12 : grid;

    $('#block' + currentBlockID).parent('.col').attr('data-grid', grid).attr('class', 'col col-' + grid);
}

$('.articleTitleA').each(function()
{
    $(this).css('max-width', $(this).parents('li').width() - $(this).prev('.category').width() - $(this).next('.sticky').width() - $(this).parent().next('.article-date').width() - 10);
})
$('.articleTitleB').each(function()
{
    $(this).css('max-width', $(this).parent('li').width() - $(this).next('.sticky').width() - 10);
})
</script><style></style></div>