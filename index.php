<?php require 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$name?> - CV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700|Roboto:400,400italic,700" rel="stylesheet" type="text/css">
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
                    <a target="_blank" href="printable.php<?php if($has_para){echo "?".$parameter;} ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-print fa-stack-1x fa-inverse"></i></span></a>
                    <?php if ($pdf): ?>
                    <a target="_blank" href="<?php=$pdfurl?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-download fa-stack-1x fa-inverse"></i></span></a>
                <?php endif; ?>
                    <!--<a href="index-zh-cn.php<?php if($has_para){echo "?".$parameter;} ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-stack-1x fa-inverse">中</i></span></a>-->
                </div>
                <img src="images/logo4square.svg" alt="" class="namecard-photo">
                <div class="namecard-name" itemprop="name"><?=$name?></div>
                <div class="namecard-contact">
                    <?php if ($phone): ?>
                        <span class="namecard-tag"><i class="fa fa-fw fa-phone"></i> Phone: 
                        <?= implode(" / ",array_map(function($v, $k){return '<a href="tel:'.$k.'">'.$v.'</a>';}, $phones, array_keys($phones))); ?>
                        </span>
                        <br/>
                    <?php endif; ?>
                    <span class="namecard-tag"><i class="fa fa-fw fa-globe"></i> Website: <a target="_blank" href="https://1A23.com" itemprop="url">1A23.com</a></span>
                    <span class="namecard-tag"><i class="fa fa-fw fa-paper-plane"></i> Telegram: <a target="_blank" href="https://telegram.me/blueset" itemprop="sameAs">Blueset</a></span>
                    <br/>
                    <span class="namecard-tag"><i class="fa fa-fw fa-github"></i> GitHub: <a target="_blank" href="https://github.com/blueset" itemprop="sameAs">Blueset</a></span>
                    <span class="namecard-tag"><i class="fa fa-fw fa-envelope"></i> E-mail: <a href="mailto:<?=$email?>" itemprop="email"><?=$email?></a></span>
                </div>
            </div>
        </div>
    </header>
    <div class="container first-container">
        <section class="full-row row profile">
            <div class="col-md-2">
                <div class="ribbon-left ribbon-left-blue">
                    <div class="section-title ribbon-left-content ribbon-left-blue-content">Profile</div>
                </div>
            </div>
            <div class="col-md-10"><p><strong class="text-lblue">D</strong>etermined, passionate, hard-working software programmer with high motivation. Experienced in multiple programing languages with passion to dig in depth. Known to be a good team worker and leader. Willing to learn new skills, modest and open-minded.</p></div>
        </section>
        <div class="row">
            <div class="col-md-4">
                <section class="education">
                    <div class="ribbon-left ribbon-left-green">
                        <div class="section-title ribbon-left-content ribbon-left-green-content">Education</div>
                    </div>
                    <p>
                        <strong class="text-lgreen">BSc Computing and Software Engineering (On-going), <time>2019</time></strong><br>
                        — <span itemprop="alumniOf" itemscope itemtype="http://schema.org/EducationalOrganization">
                            <link href="https://www.unimelb.edu.au/" itemprop="url"><span itemprop="name">University of Melbourne</span>
                        </span>
                    </p>
                    <p>
                        <strong class="text-lgreen">GCE 'A' Level, <time>2015</time></strong><br>
                        — <span itemprop="alumniOf" itemscope itemtype="http://schema.org/EducationalOrganization">
                            <link href="http://ajc.edu.sg/" itemprop="url"><span itemprop="name">Anderson Junior College, Singapore</span>
                        </span>
                    </p>
                </section>
                <section>
                    <div class="ribbon-left ribbon-left-purple">
                        <div class="section-title ribbon-left-content ribbon-left-purple-content">Looking to...</div>
                    </div>
                    <p>
                        <strong class="text-lpurple">G</strong>ain experience of working in an IT company as a software/web developer, learn new skills and techniques of software development and get to know about the real-life workflow of making a product.
                    </p>
                </section>
                <section>
                    <div class="ribbon-left ribbon-left-orange">
                        <div class="section-title ribbon-left-content ribbon-left-orange-content">Language proficiency</div>
                    </div>
                    <dl class="language-skills dl-horizontal">
                        <dt class="text-lorange">Chinese</dt>
                        <dd class="dd-stars-lorange">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <br> Native
                        </dd>
                        <dt class="text-lorange">English</dt>
                        <dd class="dd-stars-lorange">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <br> Professional, IELTS Academic 8.0
                        </dd>
                        <dt class="text-lorange">Japanese</dt>
                        <dd class="dd-stars-lorange">
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <i class="fa fa-circle-o"></i>
                            <br> Basic reading and speaking
                        </dd>
                    </dl>
                </section>
            </div>
            <div class="col-md-8">
                <section>
                    <div class="section-title section-right-title section-title-red">Technical Skills</div>
                    <div class="section-subtitle section-subtitle-red">Major Skills</div>
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
                        <dt>C++</dt>
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
                    <div class="section-subtitle section-subtitle-red">Other skills, tools, platforms</div>
                    <div class="label-list">
                        <span class="label label-red">SQL</span>
                        <span class="label label-red">AngularJS</span>
                        <span class="label label-red">OS X</span>
                        <span class="label label-red">Linux/Unix</span>
                        <span class="label label-red">Windows</span>
                        <span class="label label-red">Android</span>
                        <span class="label label-red">Sass</span>
                        <span class="label label-red">Twig</span>
                        <span class="label label-red">MVC Structure</span>
                        <span class="label label-red">RESTful API</span>
                        <span class="label label-red">Git</span>
                        <span class="label label-red">Markdown</span>
                        <span class="label label-red">Sublime Text 3</span>
                        <span class="label label-red">LaTeX</span>
                        <span class="label label-red">Laravel</span>
                        <span class="label label-red">Pascal</span>
                        <span class="label label-red">Wordpress</span>
                        <span class="label label-red">Zsh</span>
                        <span class="label label-red">Chrome Developer Tools</span>
                        <span class="label label-red">Visual Studio</span>
                        <span class="label label-red">RegEx</span>
                        <span class="label label-red">CodeIgniter</span>
                        <span class="label label-red">Twitter Bootstrap</span>
                        <span class="label label-red">Django</span>
                        <span class="label label-red">Bolt CMS</span>
                        <span class="label label-red">HTTP</span>
                        <span class="label label-red">TCP/IP</span>
                    </div>
                </section>
                <section id="projects">
                    <div class="section-title section-right-title section-title-dark">Professional Experience</div>
                    <summary class="section-subtitle section-subtitle-dark">
                        Eanois CMS — A CMS system based on Laravel
                        <div class="section-subtitle-2 section-subtitle-dark">
                            PHP · SQLite · Laravel · AngularJS · Sass · Eloquent<br>
                            <a target="_blank" href="https://github.com/blueset/eanois">https://github.com/blueset/eanois</a>
                        </div>
                    </summary>
                    <ul>
                        <li>Full CMS with Markdown parsing and upload management</li>
                        <li>Cross-language slug generation with PHP I18N and External API</li>
                        <li>Generic theming solution with unified API for AngularJS</li>
                        <li>Dynamic Sitemap and RSS generation based on Theme config</li>
                        <li>Extensible category/tag-specific template config</li>
                        <li>Fetch external RSS content</li>
                        <li>AngularJS enabled front-end in HTML5 mode</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        EH Forwarder Bot — A extendible chat tunnel between different services
                        <div class="section-subtitle-2 section-subtitle-dark">
                            Python 3 · Threading · Telegram Bot · WeChat Web API · Reverse Engineering<br>
                            <a target="_blank" href="https://github.com/blueset/ehforwarderbot">https://github.com/blueset/ehforwarderbot</a>
                        </div>
                    </summary>
                    <ul>
                        <li>Extendible Bot framework based on threading</li>
                        <li>Efficient inter-thread communication with Python Queue</li>
                        <li>Multimedia identification, format/encoding conversion</li>
                        <li>Interact with external API and reversed engineered interfaces</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        Project Lyricova — A blog system focused on lyrics
                        <div class="section-subtitle-2 section-subtitle-dark">
                            PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                            <a target="_blank" href="https://blueset.github.io/project-lyricova">https://blueset.github.io/project-lyricova</a>
                        </div>
                    </summary>
                    <ul>
                        <li>Full blog system with multiple user collaboration and permission management</li>
                        <li>Special database structure to manage multilingual lyrics</li>
                        <li>HTML5 Screensaver implemented with Canvas and three.js 3D render engine</li>
                        <li>Image generator with detailed typesetting options constructed with PHP GD+ library</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        1A23 Service Bot — Telegram Chatbot as a school information portal
                        <div class="section-subtitle-2 section-subtitle-dark">
                            Python 3 · RESTful API · HTTP API Wrapping <br>
                            <a target="_blank" href="https://github.com/blueset/SvcBot1A23">https://github.com/blueset/SvcBot1A23</a>
                        </div>
                    </summary>
                    <ul>
                        <li>Python on Apache with WSGI interface</li>
                        <li>API wrapping as a Python module</li>
                        <li>Deep integration with Telegram Bot API</li>
                        <li>Reverse engineered API from Android Apps</li>
                        <li>User login emulation in Python</li>
                        <li>Printable timetable generator with Python GD library</li>
                        <li>HTML and XML parsing to Python Objects</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        CIPREG - Online Volunteer Management System
                        <div class="section-subtitle-2 section-subtitle-dark">
                            PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                            <a target="_blank" href="https://github.com/blueset/CIP-management">https://github.com/blueset/CIP-management</a>
                        </div>
                    </summary>
                    <ul>
                        <li>Multi-admin collaboration</li>
                        <li>Volunteer task assignment</li>
                        <li>Report generation</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        StereoGIF - 3D Parallex GIF Generator
                        <div class="section-subtitle-2 section-subtitle-dark">
                            Android · Java · OpenCV<br>
                            <a target="_blank" href="https://github.com/blueset/StereoGIF">https://github.com/blueset/StereoGIF</a>
                        </div>
                    </summary>
                    <ul>
                        <li>Android UI with XML</li>
                        <li>OpenCV GIF Generation</li>
                        <li>Local storage access</li>
                        <li>File share API</li>
                    </ul>
                    <summary class="section-subtitle section-subtitle-dark">
                        SingPath — An online judgement system
                        <div class="section-subtitle-2 section-subtitle-dark">
                            AngularJS · Docker · AngularMaterial · Firebase<br>
                            <a target="_blank" href="https://github.com/ChrisBoesch/singpathfire">https://github.com/ChrisBoesch/singpathfire</a>
                        </div>
                    </summary>
                    <ul>
                        <li>Contributed in the project</li>
                        <li>Group project workflow</li>
                        <li>Unit testing</li>
                        <li>Bug report method</li>
                    </ul>
                </section>
                <section>
                    <div class="section-title section-right-title section-title-purple">Achievements</div>
                    <div class="achievements">
                        <p>
                          <em>September 2015, </em><br>
                          <strong class="section-subtitle-purple">Ace of Coders (National Infocomm Competition Face-off)</strong>, 
                          Outstanding Male Coder.
                        </p>
                        <p>
                          <em>June 2015, </em><br>
                          <strong class="section-subtitle-purple">Cyber Defenders Discovery Camp Tournament</strong>, 
                          First Position &amp; Best Defender.
                        </p>
                        <p>
                          <em>March 2015, </em><br>
                          <strong class="section-subtitle-purple">National Olympiad in Informatics</strong>, 
                          Bronze.
                        </p>
                        <p>
                          <em>June 2014, </em><br>
                          <strong class="section-subtitle-purple">SimTech Experience and Challenge Vision-based Mobile Apps Competition</strong>, 
                          Most Popular App.
                        </p>
                        <p>
                          <em>March 2014, </em><br>
                          <strong class="section-subtitle-purple">National Olympiad in Informatics</strong>, 
                          Bronze.
                        </p>
                        <p>
                          <em>July 2013, </em><br>
                          <strong class="section-subtitle-purple">National Infocomm Club Award</strong>, 
                          Silver.
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