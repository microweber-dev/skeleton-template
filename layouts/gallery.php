<?php

/*

type: layout
content_type: static
name: Gallery
position: 10

description: Gallery Page

*/


?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

<div id="content">
	<div class="container">
	    <div class="edit" rel="content" field="content">
            <module type="pictures" content-id="<?php print CONTENT_ID; ?>">
            <hr>
            <module type="comments">
        </div>
	</div>
</div>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
