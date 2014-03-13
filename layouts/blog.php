<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

<div id="content">
	<div class="container" id="blog-container">
		<div class="mw-ui-row">
			<div class="mw-ui-col">
    			<div class="mw-ui-col-container">
    				<div class="edit" field="content" rel="page">
    					 <h2><?php print $page['title'] ?></h2>
    					<p class="element">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative, Make Web.</p>
    					<module data-type="posts" data-page-id="<?php print CONTENT_ID ?>"  />
    				</div>
    			</div>
			</div>
			<div class="mw-ui-col sidebar">
    			<div class="mw-ui-col-container">
    				<?php include_once "blog_sidebar.php"; ?>
    			</div>
			</div>
		</div>
	</div>
</div>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
