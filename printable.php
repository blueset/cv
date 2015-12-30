<?php require 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?=$name?> - CV - Software/Web Development Intern</title>
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
          <h1 id="name"><?=$name?><br><small>Software/Web Development Intern</small></h1>
          <div class="visible-print cv-link"><i class="fa fa-external-link"></i> <a href="http://cv.1A23.com<?php if($has_para){echo "/?".$parameter;} ?>">https://cv.1A23.com<?php if($has_para){echo "/?".$parameter;} ?></a></div>
        </div>
        <div class="tags col-sm-6 col-sm-pull-6 col-print-xs-6 col-print-xs-pull-6 col-md-5 col-md-pull-5">
          <?php if ($location): ?>
              <div class="tag"><i class="fa fa-fw fa-map-marker"></i> 
                <?=implode(" <small>&</small> ", $locations);?>
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
          <a href="<?=$pdfurl_zh?>" class="btn btn-success">Download PDF version</a> or <a href="javascript:window.print();" class="btn btn-default">Print</a>
        <?php else: ?>
          <a href="javascript:window.print();" class="btn btn-success">Print</a>
        <?php endif; ?>
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
            <p><b>GCE 'A' Level (Pending), 2015 </b><br>&mdash; Anderson Junior College, Singapore</p>
          </section>
          <section>
            <h2>Languages</h2>
            <p><strong>Chinese: </strong>Native speaker. <br>
            <strong>English: </strong>Full Professional. <br>
            <strong>Japanese: </strong>Elementary.</p>
          </section>
        </div>
        <div class="col-md-8 col-print-xs-8 clearfix main">
          <section>
            <h2>Technical Skills</h2>
            <div class="row">
              <div class="col-md-2 col-print-xs-3"><b>Languages</b></div>
              <div class="col-md-10 col-print-xs-9">Python 3 &middot; PHP &middot; HTML &middot; CSS &middot; JavaScript &middot; SQL &middot; C++ &middot; Pascal</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-3"><b>Platforms</b></div>
              <div class="col-md-10 col-print-xs-9">Windows &middot; OS X &middot; Linux/Unix</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-3"><b>Methodologies</b></div>
              <div class="col-md-10 col-print-xs-9">MVC Structure &middot; RESTful API &middot; Git Workflow</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-3"><b>Frameworks</b></div>
              <div class="col-md-10 col-print-xs-9">CodeIgniter &middot; Laravel &middot; Twitter Bootstraps &middot; Django</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-3"><b>Networking</b></div>
              <div class="col-md-10 col-print-xs-9">TCP/IP &middot; HTTP</div>
            </div>
            <div class="row">
              <div class="col-md-2 col-print-xs-3"><b>Tools</b></div>
              <div class="col-md-10 col-print-xs-9">Sublime Text &middot; Git &middot; Bash &middot; Markdown &middot; Chrome Developer Tools &middot; Visual Studio &middot; Vim &middot; RegEx</div>
            </div>
          </section>
          <section>
            <h2>Professional Experience</h2>
            <h5>Project Lyricova &mdash; A blog system focused on lyrics</h5>
            <i>PHP &middot; SQL &middot; CodeIgniter &middot; HTML &middot; CSS &middot; JavaScript <br><a href="https://blueset.github.io/project-lyricova">http://blueset.github.io/project-lyricova</a></i>
            <ul>
              <li>Full blog system with multiple user collaboration and permission management</li>
              <li>Special database structure to manage multilingual lyrics</li>
              <li>HTML5 Screensaver implemented with Canvas and three.js 3D render engine</li>
              <li>Image generator with detailed typesetting options constructed with PHP GD+ library</li>
            </ul>
            <h5>
              1A23 Service Bot &mdash; A Telegram Chatbot as a school information portal
            </h5>
            <i>Python 3 &middot; RESTful API &middot; HTTP API Wrapping <br><a href="https://github.com/blueset/svcbot1a23">https://github.com/blueset/SvcBot1A23</a></i>
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
      <section class="download text-center print-footer">
        Please refer to the online CV for more details and the latest contact info. Online contact methods are preferred. <br>Thank you and I am looking forward to working with you.
      </section>
    </div>
  </article>
  <footer class="text-center">
    Made with <i class="fa fa-heart"></i> by <?=$name?>. <a class="hidden-print" href="https://github.com/blueset/cv">View source</a>
  </footer>
</body>
</html>