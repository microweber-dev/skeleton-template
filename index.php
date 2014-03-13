<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/

?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

<div class="container edit"  rel="page" field="content">
    <div class="wysiwyg element">
      <h2 class="text-center">
        <strong>Skeleton</strong> is a template developed for exploring and playing with
        <a target="_blank" href="https://microweber.com">Microweber</a>
      </h2>
       <div class="well">
       <h3>With only <strong>2kb</strong> of CSS and no JavaScript included in the template, the Skeleton theme has all the functionalities of Microweber:</h3>
      <br><ul>
        <li>Live text editing,</li>
        <li>Drag & Drop,</li>
        <li>Module based structure,</li>
        <li>Dynamic and static layouts</li>
      </ul>
      </div>
    </div>


    <h2><?php _e("Latest Posts"); ?></h2>


<?php

    /*

         Parameters(attributes) for "Posts" Module:


             * template - Name of the template.
               Templates provided from Microweber:
                 - default - loads when no template is specified
                 - 3 columns
                 - 4 columns
                 - sidebar

             * limit - number of posts to show per page. Default is the value specified in the Admin -> Settings (10) .

             * description-length
                - number: Number of symbols you want to show from description. Default: 400

             * title-length
                - number: Number of symbols you want to show from title. Default: 120

             * curent_page - usage is for paging
                - number: The number of the page where the posts will appear. Default: 1

             * hide-paging
                - y/n - Default: n

             * data-show:
                 Possible values:
                    - thumbnail,
                    - title,
                    - read_more,
                    - description,
                    - created_on

     */

?>
    <module
          data-type="posts"
          data-limit="3"
          id="home-posts"
          data-description-length="100"
          data-show="thumbnail,title,created_on,read_more,description"
          data-template="default" />




    <h2><?php _e("Latest Products"); ?></h2>



 <?php

    /*

         Parameters(attributes) for "Products" Module:


             * template - Name of the template.
               Templates provided from Microweber:
                 - default - loads when no template is specified
                 - 3 columns
                 - 4 columns
                 - sidebar

             * limit - number of posts to show per page. Default is the value specified in the Admin -> Settings (10) .

             * description-length
                - number: Number of symbols you want to show from description. Default: 400

             * title-length
                - number: Number of symbols you want to show from title. Default: 120

             * curent_page - usage is for paging
                - number: The number of the page where the posts will appear. Default: 1

             * hide-paging
                - y/n - Default: n

             * data-show:
                 Possible values:
                    - thumbnail,
                    - title,
                    - read_more,
                    - description,
                    - created_on

     */

?>

    <module
          data-type="shop/products"
          data-limit="3"
          id="home-products"
          data-description-length="150"
          data-show="thumbnail,title,add_to_cart,description,price"
          data-template="columns" />




</div>
<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
