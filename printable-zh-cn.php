<?php require 'config.php' ?>
<!DOCTYPE html>
<html lang="zh-hans">
<head>
  <meta charset="utf-8">
  <title><?=$name_zh?> - 简历 - Web 前后端、软件开发实习</title>
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
          <h1 id="name"><?=$name_zh?><br><small>应聘 Web 前后端、软件开发实习</small></h1>
          <div class="visible-print cv-link"><i class="fa fa-external-link"></i> <a href="http://cv.1A23.com<?php if($has_para){echo "/?".$parameter;} ?>">https://cv.1A23.com<?php if($has_para){echo "/?".$parameter;} ?></a></div>
        </div>
        <div class="tags col-sm-6 col-sm-pull-6 col-print-xs-6 col-print-xs-pull-6 col-md-5 col-md-pull-5">
          <?php if ($location): ?>
              <div class="tag"><i class="fa fa-fw fa-map-marker"></i> 
                <?=implode(" <small>&</small> ", $locations_zh);?>
              </div>
          <?php endif; ?>
          <div class="tag"><i class="fa fa-fw fa-link"></i> <a href="//1A23.com">1A23.com</a></div>
          <?php if ($phone): ?>
              <div class="tag"><i class="fa fa-fw fa-phone"></i> 
              <?= implode(" / ",array_map(function($v, $k){return '<a href="tel:'.$k.'">'.$v.'</a>';}, $phones, array_keys($phones))); ?>
              </div>
          <?php endif; ?>
          <div class="tag"><i class="fa fa-fw fa-paper-plane"></i> <a href="//telegram.me/blueset">Blueset</a></div>
          <div class="tag"><i class="fa fa-fw fa-github"></i> <a href="//github.com/blueset">Blueset</a></div>
          <div class="tag"><i class="fa fa-fw fa-envelope"></i> <a href="mailto:han.jin@1a23.com">han.jin@1A23.com</a></div>
        </div>
      </div>
    </div>
  </header>
  <article>
    <div class="container">
      <section class="download text-center hidden-print">
        <?php if ($pdf): ?>
          <a href="<?=$pdfurl_zh?>" class="btn btn-success">下载 PDF 版本</a> 或 <a href="javascript:window.print();" class="btn btn-default">打印</a>
        <?php else: ?>
          <a href="javascript:window.print();" class="btn btn-success">打印</a>
        <?php endif; ?>
      </section>
      <div class="row">
        <div class="col-md-4 col-print-xs-4 clearfix sidebar">
          <section>
            <h2>求职意向</h2>
            <p>Web 前端、后端或软件开发实习生</p>
          </section>
          <section>
            <h2>教育水平</h2>
            <p><b>GCE 'A' Level (待定), 2015 </b><br>&mdash; 新加坡安德逊初级学院</p>
          </section>
          <section>
            <h2>语言能力</h2>
            <p><strong>中文: </strong>母语水平. <br>
            <strong>英文: </strong>专业用语沟通流畅. <br>
            <strong>日文: </strong>基本水平.</p>
          </section>
        </div>
        <div class="col-md-8 col-print-xs-8 clearfix main">
          <section>
            <h2>专业技能</h2>
            <div class="row">
              <div class="col-md-2 col-print-xs-1"><b>语言</b></div>
              <div class="col-md-10 col-print-xs-10">Python 3 &middot; PHP &middot; HTML &middot; CSS &middot; JavaScript &middot; SQL &middot; C++ &middot; Pascal</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-1"><b>平台</b></div>
              <div class="col-md-10 col-print-xs-10">Windows &middot; OS X &middot; Linux/Unix</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-1"><b>方法</b></div>
              <div class="col-md-10 col-print-xs-10">MVC Structure &middot; RESTful API &middot; Git Workflow</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-1"><b>框架</b></div>
              <div class="col-md-10 col-print-xs-10">CodeIgniter &middot; Laravel &middot; Twitter Bootstraps &middot; Django</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-1"><b>网络</b></div>
              <div class="col-md-10 col-print-xs-10">TCP/IP &middot; HTTP</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-1"><b>工具</b></div>
              <div class="col-md-10 col-print-xs-10">Sublime Text &middot; Git &middot; Bash &middot; Markdown &middot; Chrome Developer Tools &middot; Visual Studio &middot; Vim &middot; RegEx</div>
            </div>
          </section>
          <section>
            <h2>项目经验</h2>
            <h5>歌语计划 — 一个歌词博客</h5>
            <i>PHP &middot; SQL &middot; CodeIgniter &middot; HTML &middot; CSS &middot; JavaScript <br><a href="https://blueset.github.io/project-lyricova">http://blueset.github.io/project-lyricova</a></i>
            <ul>
              <li>完整的博客程序、多用户协作、权限管理</li>
              <li>为多语言歌词特殊设计的数据库结构</li>
              <li>使用 HTML5 Canvas 和 three.js 3D 生成引擎制作的屏幕保护</li>
              <li>使用 PHP GD+ 库制作的图片生成模块，带有详细的字体和排版设定功能</li>
            </ul>
            <h5>
              1A23 Service Bot &mdash; Telegram 公众号学校信息平台
            </h5>
            <i>Python 3 &middot; RESTful API &middot; HTTP API 封装 <br><a href="https://github.com/blueset/svcbot1a23">https://github.com/blueset/SvcBot1A23</a></i>
            <ul>
              <li>通过 WSGI 界面连接 Python 和 Apache</li>
              <li>将网页 API 封装为 Python 类</li>
              <li>与 Telegram 开放 API 深度集成</li>
              <li>从 Android 应用中逆向工程 API</li>
              <li>使用 Python 模拟登陆</li>
              <li>使用 Python GD 库的打印机友好的课程表生成</li>
              <li>分析 HTML 和 XML 并生成 Python 对象</li>
            </ul>
            <h5>
              其他项目
            </h5>
            <ul>
              <li>CIPREG - PHP 在线志愿者管理系统</li>
              <li>LMSAPI - HTTP API 的 Python 3 封装库</li>
            </ul>
          </section>
        </div>
      </div>
      <section class="download text-center print-footer">
        请参阅在线简历以了解详情，并获取最新的联系方式。推荐您使用在线联系方式。<br>感谢您在百忙之中阅读我的简历，并期待能有机会与您共事。
      </section>
    </div>
  </article>
  <footer class="text-center">
    Made with <i class="fa fa-heart"></i> by <?=$name?>. <a class="hidden-print" href="https://github.com/blueset/cv">View source</a>
  </footer>
</body>
</html>
