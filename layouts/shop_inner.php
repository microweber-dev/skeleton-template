<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

<section id="content">
	<div class="container">
        <div class="edit"  field="content" rel="post">
        	<div class="mw-row">
        		<div class="mw-col" style="width:60%">
        			<div class="mw-col-container">
        				<module type="pictures" rel="content" template="product_gallery" />
        			</div>
        		</div>
        		<div class="mw-col" style="width:40%">
        			<div class="mw-col-container">
                        <h2 class="edit"  field="title" rel="post">Product inner page</h2>
        				<div class="product-description">
        					<p class="element">This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative &amp; <strong style="font-weight: 600">Make Web</strong>.</p>
        					<module type="shop/cart_add" rel="post" />
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <?php

            /**********************************************

              Simple example for getting
              another products from the same shop.

            ***********************************************/


            $current_product = $content['id'];
            $params = array(
                'limit' => 5,
                'order_by' => 'created_on desc',
                'content_type' => 'post',
                'subtype' => 'product',
                'is_active' => 'y',
                'parent' => $content['parent']
            );
            $posts = get_content($params);
        ?>
        <?php  if(count($posts) > 1){   ?>
           <br>
           <h2>Another products:</h2>
           <ul class="mw-ui-row mw-ui-row-fixed shop-related-items">
              <?php foreach ($posts as $post) {    ?>
                   <?php if($post['id'] != $current_product){ ?>
                    <?php  $image = get_picture($post['id']); ?>
                        <li class="mw-ui-col">
                          <div class="mw-ui-col-container">
                              <a href="<?php  print $post['url'];  ?>">
                                  <img src="<?php print $image; ?>" alt="" />
                                  <br>
                                  <strong><?php  print $post['title'];  ?></strong>
                              </a>
                          </div>
                        </li>
                   <?php }  ?>
              <?php  }  ?>
            </ul>
         <?php } ?>
	</div>
</section>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
