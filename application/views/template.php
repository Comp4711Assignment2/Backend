<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
    <!-- FONTAWESOME STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css"/>
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link rel="stylesheet" type="text/css"  href="/assets/css/font-awesome-animation.css"/>
     <!--PRETTYPHOTO MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="/assets/css/prettyPhoto.css"/>
       <!-- CUSTOM STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    <!-- GOOGLE FONT -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans' />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <div class="container">
            <!-- NAV SECTION -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">HOME</a></li>
                        <li><a href="admin">ADMINISTRATOR</a></li>
                         <li><a href="recieving">RECIEVING</a></li>
                           <li><a href="production">PRODUCTION</a></li>
                        <li><a href="sales">SALES</a></li>
                    </ul>
                </div>
            </div>
        </div>
     <!--END NAV SECTION -->         
        <div id="content">
            <h1>{pagetitle}</h1>
            {content}
        </div>
        <div id="footer" class="span12">
            Copyright &copy; 2016,  <a href="mailto:someone@somewhere.com">Me</a>.
        </div>
        </div>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>