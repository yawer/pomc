<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>" <?php print $rdf_namespaces; ?>> <!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <?php global $base_url; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php if ($mobile_friendly): ?>    
  <meta name="viewport" content="width=device-width" />
  <meta name="MobileOptimized" content="width" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <?php endif; ?>
 
  <script src=" "></script>
 <?php  print $scripts; ?>
  <script type="text/javascript">
        <!--
            // You need to specify the size of your background image here (could be done automatically by some PHP code)
            var FullscreenrOptions = {  width: 990, height: 660, bgID: '#bgimg' };
            // This will activate the full screen background!
            jQuery.fn.fullscreenr(FullscreenrOptions);
        //-->
    </script>
</head>
<body id="<?php print $body_id; ?>" class="<?php print $classes; ?>" <?php print $attributes;?>>
<!-- This is the background image -->
<img id="bgimg" src="<?php print base_path(). path_to_theme(); ?>/img/tb_rockwall.png" />
  <div id="skip-link">
    <a href="#main-content-area"><?php print t('Skip to main content area'); ?></a>
  </div>
 

  

<!-- Here the "real" body starts -->
<div id="realBody">
    <div class="container">
        <h1><a href="#"><img src="<?php print base_path(). path_to_theme(); ?>/img/landingLogo.png"/></a></h1>
    </div>
    <div id="highlightBar">
        <div class="container clearfix">
            <p class="desc">Entire social interactions amongst city dwellers</p>
            <p class="action">
            <?php print $login; ?>
            
            <span>or</span>
             
             
                <a href="#register" role="button" class="btn btn-large btn-success" data-toggle="modal">Register</a>
            </p>
        </div>
    </div>
    <footer>&copy; 2012 Paste on my City</footer>
</div><!-- Here the "real" body ends -->
 

<!-- Login Modal -->
<div id="login" class="modal modal-landing hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h2 class="form-signin-heading">Please sign in</h2>
  </div>
  <div class="modal-body">
   
      <form class="form-signin">
           <input type="email" class="input-block-level" placeholder="Email address">
           <input type="password" class="input-block-level" placeholder="Password">
          <div class="control-group">
              <div class="controls clearfix">
                  <label class="checkbox pull-left">
                      <input type="checkbox"> Remember me
                  </label>
                  <a href="#forgot" class="pull-right">Forgot Password?</a>
              </div>
          </div>

          <button class="btn btn-large btn-primary" type="submit">Sign in</button>


         </form>
  </div>
</div>

<!-- Register Modal -->
<div id="register" class="modal modal-landing hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h2 class="form-signin-heading">Please register</h2>
  </div>
  <div class="modal-body">
      <form class="form-signin">
         <input type="text" class="input-block-level" placeholder="Full Name">
         <input type="email" class="input-block-level" placeholder="Email address">
         <input type="password" class="input-block-level" placeholder="Password">
         <button class="btn btn-large btn-primary" type="submit">Register</button>
       </form>
  </div>
</div>
    <?php // print $page_bottom; ?>
</body>
</html>
