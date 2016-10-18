<?php require 'config.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
<?=$name_zh?>- 简历 - Web 前后端、软件开发实习</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:300|Roboto:400,400italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-short.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="heading col-sm-6 col-sm-push-6 col-print-xs-6 col-print-xs-push-6 col-md-5 col-md-push-7">
                    <h1 id="name">
<?=$name_zh?><br><small>应聘 Web 前后端、软件开发实习</small></h1>
                    <div class="visible-print cv-link"><i class="fa fa-external-link"></i> <a href="http://cv.1A23.com<?php if ($has_para) {echo " /? ".$parameter;}?>">https://cv.1A23.com<?php if ($has_para) {echo "/?".$parameter;}?></a></div>
                </div>
                <div class="tags col-sm-6 col-sm-pull-6 col-print-xs-6 col-print-xs-pull-6 col-md-5 col-md-pull-5">
<?php if ($location):?>
<div class="tag"><i class="fa fa-fw fa-map-marker"></i>
<?=implode(" <small>&</small> ", $locations_zh);?>
</div>
<?php endif;?>
<div class="tag"><i class="fa fa-fw fa-link"></i> <a href="//1A23.com">1A23.com</a></div>
<?php if ($phone):?>
<div class="tag"><i class="fa fa-fw fa-phone"></i>
<?=implode(" / ", array_map(function ($v, $k) {return '<a href="tel:'.$k.'">'.$v.'</a>';}, $phones, array_keys($phones)));
?>
</div>
<?php endif;?>
<div class="tag"><i class="fa fa-fw fa-paper-plane"></i> <a href="//telegram.me/blueset">Blueset</a></div>
                    <div class="tag"><i class="fa fa-fw fa-github"></i> <a href="//github.com/blueset">Blueset</a></div>
                    <div class="tag"><i class="fa fa-fw fa-envelope"></i> <a href="mailto:<?=$email?>"><?=$email?></a></div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <section class="download text-center hidden-print">
<?php if ($pdf):?>
                <a href="<?=$pdfurl?>" class="btn btn-success">下载 PDF 文档</a> 或 <a href="javascript:window.print();" class="btn btn-default">打印</a>
<?php  else :?>
<a href="javascript:window.print();" class="btn btn-success">Print</a>
<?php endif;?>
</section>
            <div class="row">
                <div class="col-md-4 col-print-xs-4 clearfix sidebar">
                    <section>
                        <h2>求职意向</h2>
                        <ul>
                            <li>Web 前端、后端，或</li>
                            <li>软件开发实习生</li>
                        </ul>
                    </section>
                    <section>
                        <h2>教育水平</h2>
                        <p><b>BSc 计算机与软件系统（进行中），2019 </b><br>&mdash; 澳大利亚墨尔本大学</p>
                        <p><b>GCE 'A' Level, 2015 </b><br>&mdash; 新加坡安德逊初级学院</p>
                    </section>
                    <section>
                        <h2>语言能力</h2>
                        <p><strong>中文: </strong>母语。<br>
                            <strong>英文: </strong>专业，雅思学术 8.0. <br>
                            <strong>日文: </strong>中等.</p>
                    </section>
                    <section>
                        <h2>获奖情况</h2>
                        <p>
                          <em>2015 年 9 月, </em><br>
                          <strong class="section-subtitle-purple">Ace of Coders (新加坡国家信息技术序幕赛)</strong>,
                          杰出选手奖.
                        </p>
                        <p>
                          <em>2015 年 6 月, </em><br>
                          <strong class="section-subtitle-purple">新加坡青年网络安全锦标赛</strong>,
                          第一名 &amp; 最佳防御奖.
                        </p>
                        <p>
                          <em>2015 年 3 月, </em><br>
                          <strong class="section-subtitle-purple">新加坡国家信息学奥林匹克竞赛</strong>,
                          铜牌.
                        </p>
                        <p>
                          <em>2014 年 6 月, </em><br>
                          <strong class="section-subtitle-purple">SimTech 图像移动应用挑战赛</strong>,
                          最受欢迎应用奖.
                        </p>
                        <p>
                          <em>2014 年 3 月, </em><br>
                          <strong class="section-subtitle-purple">新加坡国家信息学奥林匹克竞赛</strong>,
                          铜牌.
                        </p>
                    </section>
                </div>
                <div class="col-md-8 col-print-xs-8 clearfix main">
                    <section>
                        <h2>专业技能</h2>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-2"><b>语言</b></div>
                            <div class="col-md-10 col-print-xs-10">Python 3 &middot;
 PHP &middot;
 HTML5 &middot;
 CSS3 &middot;
 JavaScript &middot;
 SQL &middot;
 C++ &middot;
 Pascal
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-2"><b>平台</b></div>
                            <div class="col-md-10 col-print-xs-10">Windows &middot;
 OS X &middot;
 Linux/Unix
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-2"><b>结构</b></div>
                            <div class="col-md-10 col-print-xs-10">MVC 结构 &middot;
 RESTful API &middot;
 Git Workflow</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-2"><b>框架</b></div>
                            <div class="col-md-10 col-print-xs-10">CodeIgniter &middot;
 Laravel &middot;
 Twitter Bootstraps &middot;
 AngularJS &middot;
 Sass &middot;
 Django
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-2"><b>网络</b></div>
                            <div class="col-md-10 col-print-xs-10">TCP/IP &middot; HTTP/S</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-2"><b>工具</b></div>
                            <div class="col-md-10 col-print-xs-10">Sublime Text &middot;
 Git &middot;
 Bash &middot;
 Markdown &middot;
 Chrome Developer Tools &middot;
 Visual Studio &middot;
 Vim &middot;
 正则表达式
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2>项目经验</h2>
                        <h5>Eanois CMS — 基于 Laravel 的 CMS 内容管理系统</h5>
                        <i>PHP · SQLite · Laravel · AngularJS · Sass · Eloquent<br>
                          <a target="_blank" href="https://github.com/blueset/eanois">https://github.com/blueset/eanois</a></i>
                          <ul>
                              <li>带有 Markdown 渲染和上传管理的完整 CMS 系统</li>
                              <li>利用 PHP I18N 及外部 API 实现的跨语言 Slug 生成</li>
                              <li>使用统一 API 和 AngularJS 实现的通用主题样式方案</li>
                              <li>基于主题属性动态生成的 Sitemap 和 RSS 订阅源</li>
                              <li>可延伸的单独分类/标签用模板设定</li>
                              <li>获取远程 RSS 内容与本地内容合并</li>
                              <li>HTML5 模式 AngularJS 前端</li>
                          </ul>
                        <h5>
                            1A23 Service Bot &mdash; Telegram 公众号学校信息平台
                        </h5>
                        <i>Python 3 &middot;
 RESTful API &middot;
 HTTP API 封装 <br><a href="https://github.com/blueset/svcbot1a23">https://github.com/blueset/SvcBot1A23</a></i>
                         <ul>
                             <li>通过 WSGI 界面连接 Python 和 Apache</li>
                             <li>将网页 API 封装为 Python 类</li>
                             <li>与 Telegram 开放 API 深度集成</li>
                             <li>从 Android 应用中逆向工程 API</li>
                             <li>使用 Python 模拟登陆</li>
                             <li>使用 Python GD 库的打印机友好的课程表生成</li>
                             <li>分析 HTML 和 XML 并生成 Python 对象</li>
                         </ul>
                    </section>
                </div>
            </div>
            <section class="hidden-sc download text-center print-footer">
                请参阅在线简历以了解详情，并获取最新的联系方式。推荐您使用在线联系方式。 <br>
                感谢您在百忙之中阅读我的简历，并期待能有机会与您共事。
            </section>
        </div>
    </article>
    <footer class="hidden-sc text-center">
        Made with <i class="fa fa-heart"></i> by
<?=$name?>. <a class="hidden-print" href="https://github.com/blueset/cv">View source</a>
    </footer>

    <div class="hidden-sc page-divider"></div>

    <header class="hidden-sc">
        <div class="container">
            <div class="row">
                <div class="heading col-print-xs-9 col-xs-push-3 ">
                    <h3 id="name">
                      <small>前端、后端或软件开发实习生</small> <?=$name_zh?>
</h3>
                </div>
                <div class="tags col-print-xs-3 col-xs-pull-9">
                    <div class="tag">第 2 页</div>
                </div>
            </div>
        </div>
    </header>
    <article>
      <div class="container">
            <div class="row">
                <div class="col-md-8 col-print-xs-8 col-print-xs-push-4 col-md-push-4 main">
                    <section>
                        <h2 class="hidden-sc">项目经验 <small>(续)</small></h2>
                        <h5>EH Forwarder Bot — 可扩展的聊天服务隧道</h5>
                        <i>Python 3 · 多线程 · Telegram Bot · 微信网页 API · 逆向工程<br>
                        <a target="_blank" href="https://github.com/blueset/ehforwarderbot">https://github.com/blueset/ehforwarderbot</a></i>
                        <ul>
                            <li>基于多线程的可扩展聊天机器人框架</li>
                            <li>Python Queue 多线程间数据交换</li>
                            <li>多媒体格式识别及转码</li>
                            <li>与外部 API 及逆向工程接口进行交互</li>
                        </ul>
                        <h5>
                            歌语计划 — 一个歌词博客
                        </h5>
                        <i>PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                        <a target="_blank" href="https://blueset.github.io/project-lyricova">https://blueset.github.io/project-lyricova</a></i>
                        <ul>
                            <li>完整的博客程序、多用户协作、权限管理</li>
                            <li>为多语言歌词特殊设计的数据库结构</li>
                            <li>使用 HTML5 Canvas 和 three.js 3D 生成引擎制作的屏幕保护</li>
                            <li>使用 PHP GD+ 库制作的图片生成模块，带有详细的字体和排版设定功能</li>
                        </ul>
                        <h5>CIPREG - 在线志愿者管理系统</h5>
                        <i>
                          PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                            <a target="_blank" href="https://github.com/blueset/CIP-management">https://github.com/blueset/CIP-management</a>
                        </i>
                        <ul>
                            <li>多管理员协作</li>
                            <li>志愿者任务分配</li>
                            <li>生成报表</li>
                        </ul>
                        <h5>
                          StereoGIF - 3D 视觉效果 GIF 生成
                        </h5>
                        <i>
                          Android · Java · OpenCV<br>
                            <a target="_blank" href="https://github.com/blueset/StereoGIF">https://github.com/blueset/StereoGIF</a>
                        </i>
                        <ul>
                            <li>使用 XML 制作 Android UI</li>
                            <li>使用 OpenCV 生成 GIF 动态图片</li>
                            <li>本地存储访问</li>
                            <li>文件分享 API</li>
                        </ul>
                        <h5>SingPath — 在线程序测评系统</h5>
                        <i>
                          AngularJS · Docker · AngularMaterial · Firebase<br>
                            <a target="_blank" href="https://github.com/ChrisBoesch/singpathfire">https://github.com/ChrisBoesch/singpathfire</a>
                        </i>
                        <ul>
                            <li>参与贡献了这个开源项目</li>
                            <li>了解了团队合作流程</li>
                            <li>单元测试</li>
                            <li>Bug 反馈流程</li>
                        </ul>

                    </section>

                    <div class="hidden-sc">
                      <br>
                      <br>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-8 col-print-xs-pull-8 col-print-xs-4  sidebar">

                </div>
            </div>
        </div>
    </article>
    <footer class="text-center">
        Made with <i class="fa fa-heart"></i> by
<?=$name?>. <a class="hidden-print" href="https://github.com/blueset/cv">View source</a> <a class="visible-print" href="http://cv.1A23.com<?php if ($has_para) {echo " /? ".$parameter;}?>">https://cv.1A23.com<?php if ($has_para) {echo "/?".$parameter;}?></a>
    </footer>
</body>

</html>
