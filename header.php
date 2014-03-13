<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
    <head>
        <title>{content_meta_title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--  Site Meta Data  -->
        <meta name="keywords" content="{content_meta_keywords}">
        <meta name="description" content="{content_meta_description}">

        <!--  Site Open Graph Meta Data  -->
        <meta property="og:title" content="{content_meta_title}">
        <meta property="og:type" content="{og_type}">
        <meta property="og:url" content="{content_url}">
        <meta property="og:image" content="{content_image}">
        <meta property="og:description" content="{og_description}">
        <meta property="og:site_name" content="{og_site_name}">

        <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>skeleton.css" type="text/css" />
    </head>
    <body>
    <div id="header" class="clearfix">
        <br>
        <div class="container">
          <div class="edit nodrop" rel="global" field="header">
            <div class="mw-ui-row valign">
                <div class="mw-ui-col" id="logo-column">
                    <div class="mw-ui-col-container">
                        <div class="element logo"><a href="<?php print site_url(); ?>">Skeleton</a></div>
                    </div>
                </div>
                <div class="mw-ui-col" id="main-menu">
                    <div class="mw-ui-col-container">
                        <module type="menu" name="header_menu" id="main-navigation"  />
                    </div>
                </div>
                <div class="mw-ui-col" id="header-cart">
                    <div class="mw-ui-col-container">
                        <module type="shop/cart" template="small" />
                    </div>
                </div>
            </div>
          </div>
        </div>
        <hr>
        <br>
    </div><!-- /#header -->