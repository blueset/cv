<?php require 'config.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
<?=$name?>- CV - Software/Web Development Intern</title>
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
<?=$name?><br><small>Software/Web Development Intern</small></h1>
                    <div class="visible-print cv-link"><i class="fa fa-external-link"></i> <a href="http://cv.1A23.com<?php if ($has_para) {echo " /? ".$parameter;}?>">https://cv.1A23.com<?php if ($has_para) {echo "/?".$parameter;}?></a></div>
                </div>
                <div class="tags col-sm-6 col-sm-pull-6 col-print-xs-6 col-print-xs-pull-6 col-md-5 col-md-pull-5">
<?php if ($location):?>
<div class="tag"><i class="fa fa-fw fa-map-marker"></i>
<?=implode(" <small>&</small> ", $locations);?>
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
                <a href="<?=$pdfurl?>" class="btn btn-success">Download PDF version</a> or <a href="javascript:window.print();" class="btn btn-default">Print</a>
<?php  else :?>
<a href="javascript:window.print();" class="btn btn-success">Print</a>
<?php endif;?>
</section>
            <div class="row">
                <div class="col-md-4 col-print-xs-4 clearfix sidebar">
                    <section>
                        <h2>Profile</h2>
                        <p>Determined, passionate, hard-working software programmer with high motivation. Experienced in multiple programing languages with passion to dig in depth. Known to be a good team worker and leader. Willing to learn new skills, modest and open-minded.</p>
                    </section>
                    <section>
                        <h2>Looking to...</h2>
                        <p>Gain experience of working in an IT company as a software/web developer, learn new skills and techniques of software development and get to know about the real-life workflow of making a product. </p>
                    </section>
                    <section>
                        <h2>Education</h2>
                        <p><b>BSc Computing and Software Engineering (On-going), 2019 </b><br>&mdash; University of Melbourne, Australia</p>
                        <p><b>GCE 'A' Level, 2015 </b><br>&mdash; Anderson Junior College, Singapore</p>
                    </section>
                    <section>
                        <h2>Languages</h2>
                        <p><strong>Chinese: </strong>Native speaker. <br>
                            <strong>English: </strong>Professional, IELTS Academic 8.0. <br>
                            <strong>Japanese: </strong>Intermediate.</p>
                    </section>
                </div>
                <div class="col-md-8 col-print-xs-8 clearfix main">
                    <section>
                        <h2>Technical Skills</h2>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-3"><b>Languages</b></div>
                            <div class="col-md-10 col-print-xs-9">Python 3 &middot;
 PHP &middot;
 HTML &middot;
 CSS &middot;
 JavaScript &middot;
 SQL &middot;
 C++ &middot;
 Pascal
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-3"><b>Platforms</b></div>
                            <div class="col-md-10 col-print-xs-9">Windows &middot;
 OS X &middot;
 Linux/Unix
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-3"><b>Methodologies</b></div>
                            <div class="col-md-10 col-print-xs-9">MVC Structure &middot;
 RESTful API &middot;
 Git Workflow</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-3"><b>Frameworks</b></div>
                            <div class="col-md-10 col-print-xs-9">CodeIgniter &middot;
 Laravel &middot;
 Twitter Bootstraps &middot;
 AngularJS &middot;
 Sass &middot;
 Django
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-3"><b>Networking</b></div>
                            <div class="col-md-10 col-print-xs-9">TCP/IP &middot; HTTP</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-print-xs-3"><b>Tools</b></div>
                            <div class="col-md-10 col-print-xs-9">Sublime Text &middot;
 Git &middot;
 Bash &middot;
 Markdown &middot;
 Chrome Developer Tools &middot;
 Visual Studio &middot;
 Vim &middot;
 RegEx
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2>Professional Experience</h2>
                        <h5>Eanois CMS — A CMS system based on Laravel</h5>
                        <i>PHP · SQLite · Laravel · AngularJS · Sass · Eloquent<br>
                          <a target="_blank" href="https://github.com/blueset/eanois">https://github.com/blueset/eanois</a></i>
                        <ul>
                            <li>Full CMS with Markdown parsing and upload management</li>
                            <li>Cross-language slug generation with PHP I18N and External API</li>
                            <li>Generic theming solution with unified API for AngularJS</li>
                            <li>Dynamic Sitemap and RSS generation based on Theme config</li>
                            <li>Extensible category/tag-specific template config</li>
                            <li>Fetch external RSS content</li>
                            <li>AngularJS enabled front-end in HTML5 mode</li>
                        </ul>
                        <h5>
                            1A23 Service Bot &mdash; A Telegram Chatbot as a school information portal
                        </h5>
                        <i>Python 3 &middot;
 RESTful API &middot;
 HTTP API Wrapping <br><a href="https://github.com/blueset/svcbot1a23">https://github.com/blueset/SvcBot1A23</a></i>
                        <ul>
                            <li>Python on Apache with WSGI interface</li>
                            <li>API wrapping as a Python module</li>
                            <li>Deep integration with Telegram Bot API</li>
                            <li>Reverse engineered API from Android Apps</li>
                            <li>User login emulation in Python</li>
                            <li>Printable timetable generator with Python GD library</li>
                            <li>HTML and XML parsing to Python Objects</li>
                        </ul>
                    </section>
                </div>
            </div>
            <section class="hidden-sc download text-center print-footer">
                Please refer to the online CV for more details and the latest contact info. Online contact methods are preferred. <br>Thank you and I am looking forward to working with you.
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
                      <small>Software/Web Development Intern</small> <?=$name?>
</h3>
                </div>
                <div class="tags col-print-xs-3 col-xs-pull-9">
                    <div class="tag">Page 2</div>
                </div>
            </div>
        </div>
    </header>
    <article>
      <div class="container">
            <div class="row">
                <div class="col-md-8 col-print-xs-8 col-print-xs-push-4 col-md-push-4 main">
                    <section>
                        <h2 class="hidden-sc">Professional Experience <small>(cont'd)</small></h2>
                        <h5>EH Forwarder Bot — An extensible chat tunnel between different services</h5>
                        <i>Python 3 · Threading · Telegram Bot · WeChat Web API · Reverse Engineering <br>
                        <a target="_blank" href="https://github.com/blueset/ehforwarderbot">https://github.com/blueset/ehforwarderbot</a></i>
                        <ul>
                            <li>Extendible Bot framework based on threading</li>
                            <li>Efficient inter-thread communication with Python Queue</li>
                            <li>Multimedia identification, format/encoding conversion</li>
                            <li>Interact with external API and reversed engineered interfaces</li>
                        </ul>
                        <h5>
                            Project Lyricova — A blog system focused on lyrics
                        </h5>
                        <i>PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                            <a target="_blank" href="https://blueset.github.io/project-lyricova">https://blueset.github.io/project-lyricova</a></i>
                        <ul>
                            <li>Python on Apache with WSGI interface</li>
                            <li>API wrapping as a Python module</li>
                            <li>Deep integration with Telegram Bot API</li>
                            <li>Reverse engineered API from Android Apps</li>
                            <li>User login emulation in Python</li>
                            <li>Printable timetable generator with Python GD library</li>
                            <li>HTML and XML parsing to Python Objects</li>
                        </ul>
                        <h5>CIPREG - Online Volunteer Management System</h5>
                        <i>
                          PHP · SQL · CodeIgniter · HTML · CSS · JavaScript<br>
                            <a target="_blank" href="https://github.com/blueset/CIP-management">https://github.com/blueset/CIP-management</a>
                        </i>
                        <ul>
                            <li>Multi-admin collaboration</li>
                            <li>Volunteer task assignment</li>
                            <li>Report generation</li>
                        </ul>
                        <h5>
                          StereoGIF - 3D Parallex GIF Generator
                        </h5>
                        <i>
                          Android · Java · OpenCV<br>
                            <a target="_blank" href="https://github.com/blueset/StereoGIF">https://github.com/blueset/StereoGIF</a>
                        </i>
                        <ul>
                            <li>Android UI with XML</li>
                            <li>OpenCV GIF Generation</li>
                            <li>Local storage access</li>
                            <li>File share API</li>
                        </ul>
                        <h5>SingPath — An online judgement system</h5>
                        <i>
                          AngularJS · Docker · AngularMaterial · Firebase<br>
                            <a target="_blank" href="https://github.com/ChrisBoesch/singpathfire">https://github.com/ChrisBoesch/singpathfire</a>
                        </i>
                        <ul>
                            <li>Contributed in the project</li>
                            <li>Group project workflow</li>
                            <li>Unit testing</li>
                            <li>Bug report method</li>
                        </ul>

                    </section>

                    <div class="hidden-sc">
                      <br>
                      <br>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-8 col-print-xs-pull-8 col-print-xs-4  sidebar">
                    <section>
                        <h2>Achievements</h2>
                        <p>
                          <em>September 2015, </em><br>
                          <strong>Ace of Coders (National Infocomm Competition Face-off)</strong>,
                          Outstanding Male Coder.
                        </p>
                        <p>
                          <em>June 2015, </em><br>
                          <strong>Cyber Defenders Discovery Camp Tournament</strong>,
                          First Position &amp; Best Defender.
                        </p>
                        <p>
                          <em>March 2015, </em><br>
                          <strong>National Olympiad in Informatics</strong>,
                          Bronze.
                        </p>
                        <p>
                          <em>June 2014, </em><br>
                          <strong>SimTech Experience and Challenge Vision-based Mobile Apps Competition</strong>,
                          Most Popular App.
                        </p>
                        <p>
                          <em>March 2014, </em><br>
                          <strong>National Olympiad in Informatics</strong>,
                          Bronze.
                        </p>
                        <p>
                          <em>July 2013, </em><br>
                          <strong>National Infocomm Club Award</strong>,
                          Silver.
                        </p>
                    </section>
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
