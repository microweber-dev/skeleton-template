<?php

/*

type: layout
content_type: static
name: Typography
position: 2
description: Typography layout

*/


?>
<?php include THIS_TEMPLATE_DIR. "header.php"; ?>

<div class="page-content">
  <div class="container edit wysiwyg" field="content" rel="content">
      <div class="mw-row">
        <div class="mw-col" style="width: 30%">
            <div class="mw-col-container">
                <h1>Heading 1 &lt;h1></h1>
                <h2>Heading 2 &lt;h2></h2>
                <h3>Heading 3 &lt;h3></h3>
                <h4>Heading 4 &lt;h4></h4>
                <h5>Heading 5 &lt;h5></h5>
                <h6>Heading 6 &lt;h6></h6>
            </div>
        </div>
        <div class="mw-col" style="width: 70%">
            <div class="mw-col-container">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut lectus laoreet, lobortis risus et, mattis ante.</p>
              <p>Quisque ullamcorper vehicula augue, nec dignissim lorem accumsan et. Maecenas vitae semper arcu. Donec ornare lacus metus, in euismod sapien malesuada id. </p>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla justo metus, dapibus eget nisi sed, rutrum posuere nulla. </p>
              <p>Quisque rutrum nec odio sit amet pulvinar. Donec condimentum nunc nec ligula sagittis tincidunt. </p>
              <p>Donec tristique massa a libero elementum tempus. Fusce sagittis bibendum porta. Nunc ut ligula sit amet tellus ornare facilisis. Curabitur ac sagittis magna, sed viverra dui.</p>
            </div>
        </div>
      </div>
      <h3>Grids</h3>
      <hr><br>
      <h4>Live-edit Grid</h4>
      <div class="mw-row">
        <div class="mw-col" style="width: 25%">
            <div class="mw-col-container">
                 <p>The size of these columns can be edited live if you are logged. Also you can increase or decrease the number of columns.</p>
            </div>
        </div>
        <div class="mw-col" style="width: 50%">
            <div class="mw-col-container">
                 <p>Vivamus cursus orci risus, at commodo nulla laoreet ut. Vestibulum sit amet odio nisl. Suspendisse potenti. Mauris bibendum, elit at iaculis lacinia, ipsum turpis ornare elit, sit amet congue est erat et arcu. Sed in pharetra lectus. Pellentesque et sem ornare, dignissim mauris id, vulputate urna. Proin sodales neque quam, ut pellentesque nunc volutpat sed.</p>
            </div>
        </div>
        <div class="mw-col" style="width: 25%">
            <div class="mw-col-container">
                 <p>Vivamus cursus orci risus, at commodo nulla laoreet ut. Vestibulum sit amet odio nisl. Suspendisse potenti. Mauris bibendum, elit at iaculis lacinia, ipsum turpis ornare elit, sit amet congue est erat et arcu. Sed in pharetra lectus.</p>
            </div>
        </div>
      </div>

      <br>

      <h4>Static Grid</h4>

      <div class="mw-ui-row">
        <div class="mw-ui-col" style="width: 25%">
            <div class="mw-ui-col-container">
                 <p>These are static columns. User can change only the content in each one.</p>
            </div>
        </div>
        <div class="mw-ui-col" style="width: 50%">
            <div class="mw-ui-col-container">
                 <p>Vivamus cursus orci risus, at commodo nulla laoreet ut. Vestibulum sit amet odio nisl. Suspendisse potenti. Mauris bibendum, elit at iaculis lacinia, ipsum turpis ornare elit, sit amet congue est erat et arcu. Sed in pharetra lectus. Pellentesque et sem ornare, dignissim mauris id, vulputate urna. Proin sodales neque quam, ut pellentesque nunc volutpat sed.</p>
            </div>
        </div>
        <div class="mw-ui-col" style="width: 25%">
            <div class="mw-ui-col-container">
                 <p>Vivamus cursus orci risus, at commodo nulla laoreet ut. Vestibulum sit amet odio nisl. Suspendisse potenti. Mauris bibendum, elit at iaculis lacinia, ipsum turpis ornare elit, sit amet congue est erat et arcu. Sed in pharetra lectus.</p>
            </div>
        </div>
      </div>


      <h4>Combined</h4>

      <div class="well">
        <div class="mw-row">
          <div class="mw-col" style="width: 25%">
              <div class="mw-col-container">
                   <img src="<?php print pixum(250,250); ?>" alt="" />
              </div>
          </div>
          <div class="mw-col" style="width: 75%">
              <div class="mw-col-container">
                   <p>Vivamus cursus orci risus, at commodo nulla laoreet ut. Vestibulum sit amet odio nisl. Suspendisse potenti. Mauris bibendum, elit at iaculis lacinia, ipsum turpis ornare elit, sit amet congue est erat et arcu. Sed in pharetra lectus. Pellentesque et sem ornare, dignissim mauris id, vulputate urna. Proin sodales neque quam, ut pellentesque nunc volutpat sed.</p>
                   <a href="javascript:;">Read More</a>
              </div>
          </div>

        </div>
      </div>

      <h3>Lists</h3>
      <hr><br>

      <div class="mw-ui-row">
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
              <ul>
                <li>Unorderdered list item</li>
                <li>Unorderdered list item</li>
                <li>Unorderdered list item</li>
                <li>Unorderdered list item</li>
                <li>Unorderdered list item</li>
              </ul>
            </div>
        </div>
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
              <ol>
                <li>Orderdered list item</li>
                <li>Orderdered list item</li>
                <li>Orderdered list item</li>
                <li>Orderdered list item</li>
                <li>Orderdered list item</li>
              </ol>
            </div>
        </div>
      </div>
      <br>
      <h3>Form Elements</h3>
      <hr><br>

      <div class="mw-ui-row">
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label>Text</label>
                <input type="text" placeholder="Text" />
                <label>Text</label>
                <textarea placeholder="Text"></textarea>
            </div>
        </div>
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label>Select</label>
                <select>
                    <option>Options</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                </select>
                <label>Radios</label>
                <input type="radio" />
                <label>Check</label>
                <input type="checkbox" />
            </div>
        </div>
      </div>


  </div>
</div>


<?php include THIS_TEMPLATE_DIR. "footer.php"; ?>
