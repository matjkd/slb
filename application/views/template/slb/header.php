<meta charset="utf-8">

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
     Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
if (isset($metatitle) && $metatitle != NULL) {
    echo $metatitle;
} else {
    if (isset($title) && $title != NULL) {
        echo $title;
    } else {
        echo "SLB Business Advisory";
    }
}
?></title>
<meta name="description" content="<?php
if (isset($meta_description) && $meta_description != NULL) {
    echo $meta_description;
} else {
    echo "SLB Business Advisory was formed in 2012. As a team, we are highly committed to providing maximum support to clients through what is often a turbulent and stressful process, and delivering a comprehensive solution that is tailored specifically to their requirements.";
}
?>">

<meta name="keywords" content="<?php
if (isset($meta_keywords) && $meta_keywords != NULL) {
    echo $meta_keywords;
} else {
    echo "Advisory";
}
?>">
<meta name="author" content="DesignCo">
<meta name="google-site-verification" content="" />
<!--  Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=960, initial-scale=1.0">

<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="<?= base_url() ?>favicon.ico">
<link rel="apple-touch-icon" href="<?= base_url() ?>apple-touch-icon.png">

<!-- Load google fonts-->
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>


<!-- CSS : implied media="all" er -->
<link rel="stylesheet" href="<?= base_url() ?>css/custom-theme/jquery-ui-1.8.9.custom.css">
<link rel="stylesheet" href="<?= base_url() ?>css/grid.css">
<link rel="stylesheet" href="<?= base_url() ?>css/demo_table.css">
<link rel="stylesheet" href="<?= base_url() ?>css/demo_table_jui.css">

<link rel="stylesheet" href="<?= base_url() ?>css/style.css?v=2">

<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/template.css">

<link rel="stylesheet" href="<?= base_url() ?>css/mscarousel.css">
<link rel="stylesheet" media="handheld" href="<?= base_url() ?>css/handheld.css?v=2">  

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
<script src="<?= base_url() ?>js/libs/modernizr-1.6.min.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19623681-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>