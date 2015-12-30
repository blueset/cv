<?php require 'config.php' ?>
<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="UTF-8">
    <title><?=$name_zh?> - 简历</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700|Roboto:400,400italic,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/earlyaccess/notosanssc.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
    <header>
        <div class="container">
            <div class="namecard">
                <div class="namecard-float">
                    <a target="_blank" href="printable-zh-cn.php<?php if($has_para){echo "?".$parameter;} ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-print fa-stack-1x fa-inverse"></i></span></a>
                    <?php if ($pdf): ?>
                    <a target="_blank" href="<?=$pdfurl_zh?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-download fa-stack-1x fa-inverse"></i></span></a>
                    <?php endif; ?>
                    <a href="index.php<?php if($has_para){echo "?".$parameter;} ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse">En</i></span></a>
                </div>
                <img src="images/logo4square.svg" alt="" class="namecard-photo">
                <div class="namecard-name" itemprop="name"><?=$name_zh?></div>
                <div class="namecard-contact">
                    <?php if ($phone): ?>
                        <span class="namecard-tag"><i class="fa fa-fw fa-phone"></i> 电话: 
                        <?= implode(" / ",array_map(function($v, $k){return '<a href="tel:'.$k.'">'.$v.'</a>';}, $phones, array_keys($phones))); ?>
                        </span>
                        <br/>
                    <?php endif; ?>
                    <span class="namecard-tag"><i class="fa fa-fw fa-globe"></i> 网站: <a target="_blank" href="https://1A23.com" itemprop="url">1A23.com</a></span>
                    <span class="namecard-tag"><i class="fa fa-fw fa-paper-plane"></i> Telegram: <a target="_blank" href="https://telegram.me/blueset" itemprop="sameAs">Blueset</a></span>
                    <br/>
                    <span class="namecard-tag"><i class="fa fa-fw fa-github"></i> GitHub: <a target="_blank" href="https://github.com/blueset" itemprop="sameAs">Blueset</a></span>
                    <span class="namecard-tag"><i class="fa fa-fw fa-envelope"></i> E-mail: <a href="mailto:han.jin@1a23.com" itemprop="email">han.jin@1A23.com</a></span>
                </div>
            </div>
        </div>
    </header>
    <div class="container first-container">
        <div class="row">
            <div class="col-md-4">
                <section>
                    <div class="ribbon-left ribbon-left-purple">
                        <div class="section-title ribbon-left-content ribbon-left-purple-content">求职意向</div>
                    </div>
                    <p>
                        <strong class="text-lpurple">W</strong>eb 前端、后端或软件开发实习生
                    </p>
                </section>
                <section class="education">
                    <div class="ribbon-left ribbon-left-green">
                        <div class="section-title ribbon-left-content ribbon-left-green-content">教育水平</div>
                    </div>
                    <p>
                        <strong class="text-lgreen"><abbr title="新加坡—剑桥通用学业水平测试（高级）">GCE 'A' Level</abbr> (待定), <time>2015 年</time></strong><br>
                        — <span itemprop="alumniOf" itemscope itemtype="http://schema.org/EducationalOrganization">
                            <link href="http://ajc.edu.sg/" itemprop="url"><span itemprop="name">新加坡安德逊初级学院</span>
                        </span>
                    </p>
                </section>
                <section>
                    <div class="ribbon-left ribbon-left-orange">
                        <div class="section-title ribbon-left-content ribbon-left-orange-content">语言能力</div>
                    </div>
                    <dl class="language-skills dl-horizontal">
                        <dt class="text-lorange">中文</dt>
                        <dd class="dd-stars-lorange">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                        </dd>
                        <dt class="text-lorange">英文</dt>
                        <dd class="dd-stars-lorange">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                        </dd>
                        <dt class="text-lorange">日文</dt>
                        <dd class="dd-stars-lorange">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                        </dd>
                    </dl>
                </section>
            </div>
            <div class="col-md-8">
                <section class="skills">
                    <div class="section-title section-right-title section-title-red">专业技能</div>
                    <div class="section-subtitle section-subtitle-red">突出技能</div>
                    <dl class="major-skills dl-horizontal">
                        <dt>Python 3</dt>
                        <dd class="dd-stars">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                        </dd>
                        <dt>HTML 5</dt>
                        <dd class="dd-stars">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                        </dd>
                        <dt>PHP</dt>
                        <dd class="dd-stars">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                        </dd>
                        <dt>Javascript</dt>
                        <dd class="dd-stars">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <!-- i.fa.fa-circle*4+i.fa.fa-circle-o*3 -->
                        </dd>
                        <dt>CSS 3</dt>
                        <dd class="dd-stars">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                        </dd>
                        <dt>SQL</dt>
                        <dd class="dd-stars">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                        </dd>
                    </dl>
                    <div class="section-subtitle section-subtitle-red">其他技能、使用工具、平台</div>
                    <div class="label-list">
                        <span class="label label-red">C++</span>
                        <span class="label label-red">Pascal</span>
                        <span class="label label-red">Java</span>
                        <span class="label label-red">OS X</span>
                        <span class="label label-red">Linux/Unix</span>
                        <span class="label label-red">Windows</span>
                        <span class="label label-red">Android</span>
                        <span class="label label-red">Sass</span>
                        <span class="label label-red">Twig</span>
                        <span class="label label-red">LaTeX</span>
                        <span class="label label-red">MVC Structure</span>
                        <span class="label label-red">RESTful API</span>
                        <span class="label label-red">Git</span>
                        <span class="label label-red">Sublime Text 3</span>
                        <span class="label label-red">Zsh</span>
                        <span class="label label-red">Markdown</span>
                        <span class="label label-red">Chrome Developer Tools</span>
                        <span class="label label-red">Visual Studio</span>
                        <span class="label label-red">Regular Expression</span>
                        <span class="label label-red">Vim</span>
                        <span class="label label-red">CodeIgniter</span>
                        <span class="label label-red">Laravel</span>
                        <span class="label label-red">Twitter Bootstrap</span>
                        <span class="label label-red">Wordpress</span>
                        <span class="label label-red">Django</span>
                        <span class="label label-red">Bolt CMS</span>
                        <span class="label label-red">HTTP</span>
                        <span class="label label-red">TCP/IP</span>
                    </div>
                </section>
                <section>
                    <div class="section-title section-right-title section-title-dark">项目经验</div>
                    <summary class="section-subtitle section-subtitle-dark">
                        歌语计划 — 一个歌词博客
                        <div class="section-subtitle-2 section-subtitle-dark">
                            PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                            <a target="_blank" href="https://blueset.github.io/project-lyricova">https://blueset.github.io/project-lyricova</a>
                        </div>
                    </summary>
                    <ul>
                        <li>完整的博客程序、多用户协作、权限管理</li>
                        <li>为多语言歌词特殊设计的数据库结构</li>
                        <li>使用 HTML5 Canvas 和 three.js 3D 生成引擎制作的屏幕保护</li>
                        <li>使用 PHP GD+ 库制作的图片生成模块，带有详细的字体和排版设定功能</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        1A23 Service Bot — Telegram 公众号学校信息平台
                        <div class="section-subtitle-2 section-subtitle-dark">
                            Python 3 · RESTful API · HTTP API 封装 <br>
                            <a target="_blank" href="https://github.com/blueset/SvcBot1A23">https://github.com/blueset/SvcBot1A23</a>
                        </div>
                    </summary>
                    <ul>
                        <li>通过 WSGI 界面连接 Python 和 Apache</li>
                        <li>将网页 API 封装为 Python 类</li>
                        <li>与 Telegram 开放 API 深度集成</li>
                        <li>从 Android 应用中逆向工程 API</li>
                        <li>使用 Python 模拟登陆</li>
                        <li>使用 Python GD 库的打印机友好的课程表生成</li>
                        <li>分析 HTML 和 XML 并生成 Python 对象</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        CIPREG - 在线志愿者管理系统
                        <div class="section-subtitle-2 section-subtitle-dark">
                            PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                            <a target="_blank" href="https://github.com/blueset/CIP-management">https://github.com/blueset/CIP-management</a>
                        </div>
                    </summary>
                    <ul>
                        <li>多管理员协作</li>
                        <li>志愿者任务分配</li>
                        <li>生成报表</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        StereoGIF - 3D 视觉效果 GIF 生成
                        <div class="section-subtitle-2 section-subtitle-dark">
                            Android · Java · OpenCV<br>
                            <a target="_blank" href="https://github.com/blueset/StereoGIF">https://github.com/blueset/StereoGIF</a>
                        </div>
                    </summary>
                    <ul>
                        <li>使用 XML 制作 Android UI</li>
                        <li>使用 OpenCV 生成 GIF 动态图片</li>
                        <li>本地存储访问</li>
                        <li>文件分享 API</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        SingPath — 在线程序测评系统
                        <div class="section-subtitle-2 section-subtitle-dark">
                            AngularJS · Docker · AngularMaterial · Firebase<br>
                            <a target="_blank" href="https://github.com/ChrisBoesch/singpathfire">https://github.com/ChrisBoesch/singpathfire</a>
                        </div>
                    </summary>
                    <ul>
                        <li>参与贡献了这个开源项目</li>
                        <li>了解了团队合作流程</li>
                        <li>单元测试</li>
                        <li>Bug 反馈方式</li>
                    </ul>
                </section>
                <section>
                    <div class="section-title section-right-title section-title-purple">获奖情况</div>
                    <div class="achievements">
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
                        <p>
                          <em>2013 年 7 月, </em><br>
                          <strong class="section-subtitle-purple">新加坡国家信息技术俱乐部奖</strong>, 
                          银牌.
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <footer>
            Handmade by <?=$name?> with <i class="fa fa-heart section-subtitle-red"></i>, Chrome and Sublime Text 3. <a href="https://github.com/blueset/cv">View source</a>.
        </footer>
    </div>
</body>
</html>