<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=greek,latin,cyrillic-ext,latin-ext,cyrillic" rel="stylesheet">
<script>
          $(document).ready(function(){
            mw.simpletabs();
          });
</script>
<script>
  mw.require("files.js");
  mw.require("<?php print INCLUDES_URL; ?>css/wysiwyg.css");
</script>
<script type="text/javascript">
$(document).ready(function(){
    mw.$(".bgi").click(function(){
        if(!$(this).hasClass("active")){
            mw.$(".bgi").removeClass("active");
            $(this).addClass("active");
            mw.$("#bodybg").val(!this.className.contains("STYLERESET") ? this.style.backgroundImage : "reset");
            mw.tpl.save();
        }
    });
    mw.$(".bgc").click(function(){
        if(!$(this).hasClass("active")){
            mw.$(".bgc").removeClass("active");
            $(this).addClass("active");
            mw.$("#headerbg").val(!this.className.contains("STYLERESET") ? this.style.backgroundColor : "reset");
            mw.tpl.save();
        }
    });

    mw.$(".bgctextcolor").click(function(){
        if(!$(this).hasClass("active")){
            mw.$(".bgctextcolor").removeClass("active");
            $(this).addClass("active");
            mw.$("#textcolor").val(!this.className.contains("STYLERESET") ? this.style.backgroundColor : "reset");
            mw.tpl.save();
        }
    });

    mw.$(".bgclinkcolor").click(function(){
        if(!$(this).hasClass("active")){
            mw.$(".bgclinkcolor").removeClass("active");
            $(this).addClass("active");
            mw.$("#linkcolor").val(!this.className.contains("STYLERESET") ? this.style.backgroundColor : "reset");
            mw.tpl.save();
        }
    });


    var uploader = mw.files.uploader({
      filetypes:'images',
      multiple:false
    });
    mw.$("#uploader").append(uploader);

    $(uploader).bind("FileUploaded", function(a,b){
            mw.$(".pattern.bgi").removeClass("active");
            mw.$("#bodybg").val("url(" + b.src + ");");
            mw.tpl.save();
    });
    mw.tools.dropdown();

    mw.$("#font_family").bind("change", function(){
        var val = $(this).getDropdownValue();
        mw.$("#font").val(val);
        mw.tpl.save();
    });

  mw.$("#mw_set_template_style").bind("change", function(){
	   var val = $(this).val();
       mw.$("#import_css").val('url("'+val+'")');
       mw.tpl.save();
    });

    mw.$("#font_family").setDropdownValue(mw.$("#font").val());





});
</script>
<style type="text/css">
.pattern {
	float: left;
	display: block;
	border: 1px solid transparent;
	width: 27px;
	height: 27px;
	margin: 5px;
	background-color: transparent;
	background-repeat: no-repeat;
	background-position: center;
	background-size: 100% 100%;
	box-shadow: 0 0px 2px #ccc;
	cursor: pointer;
}
.pattern:hover, .pattern:focus {
	box-shadow: 1px 1px 2px #8A8A8A;
}
.pattern.active {
	border-color: rgba(44, 121, 204, 1);
}
#uploader {
	float: left;
	margin-left: 7px;
	margin-top: 7px;
}
.STYLERESET {
	color: #666666;
	text-decoration: underline;
	font-size: 11px;
	cursor: pointer;
	display: inline-block;
	position: relative;
	clear: both;
	float: left;
}
.pattern + .STYLERESET {
	top: 8px;
	left: 5px;
}
</style>
<label class="mw-ui-label">Default Font</label>
<input type="hidden"
             class="tpl-field"
             data-selector="body, a"
             value = "<?php if(isset($data['font']) and isset($data['font']['value'])){ print $data['font']['value']; } ?>"
             name="font"
             id="font"
             data-property="font-family" />
<div title="Template Font" id="font_family" class="mw-dropdown mw-dropdown_type_navigation"> <span class="mw-dropdown-value"> <span class="mw-dropdown-val" style="width: 130px;">Select</span> </span>
  <div class="mw-dropdown-content" style="left: 0px;">
    <ul>
      <li value="Open Sans"><a style="font-family: Open Sans" href="#">Open Sans</a></li>
      <li value="Arial"><a style="font-family: Arial" href="#">Arial</a></li>
      <li value="Tahoma"><a style="font-family: Tahoma" href="#">Tahoma</a></li>
      <li value="Verdana"><a style="font-family: Verdana" href="#">Verdana</a></li>
      <li value="Georgia"><a style="font-family: Georgia" href="#">Georgia</a></li>
      <li value="Segoe UI, Arial, sans-serif"><a style="font-family: Segoe UI, Arial, sans-serif" href="#">Segoe UI</a></li>
      <li value="Times New Roman"><a style="font-family: Times New Roman" href="#">Times New Roman</a></li>
    </ul>
  </div>
</div>
<div class="vSpace"></div>
<?php 
	
	$color_cheme = false;
	if(isset($data['import']) and isset($data['import']['value'])){ 
	$color_cheme = $data['import']['value'];
	} 
	$swatches = array(
	'spacelab','superhero',
	'amelia','cerulean',
	'cosmo','cyborg',
	'darkly','flatly',
	'journal','lumen',
	'readable','shamrock',
	'slate','simplex',
	'yeti','united'
	);
	
	
	  
     
    
  

	
	
	?>
    
    <?php if(isset($swatches) and !empty($swatches)): ?>
<label class="mw-ui-label">Color scheme</label>
<select id="mw_set_template_style" class="mw-ui-field">
  <option value="reset">None</option>
  <?php foreach($swatches as $swatch): ?>
    <option <?php if(strstr($color_cheme,$swatch)) : ?> selected="selected" <?php endif; ?> value="<?php print template_url(); ?>swatches/<?php print $swatch ?>/bootstrap.min.css"><?php print ucwords($swatch); ?></option>

  <?php endforeach; ?>
 
 </select>
<input type="hidden"
             class="tpl-field"
             data-selector="@import"
             value = "<?php print $color_cheme; ?>"
             name="import"
             id="import_css"
             />
<hr>

<?php endif; ?>



<label class="mw-ui-label">Text Color</label>
<span class="pattern bgctextcolor" style="background-color: #A0CE4E;"></span> <span class="pattern bgctextcolor" style="background-color: #9DB668;"></span> <span class="pattern bgctextcolor" style="background-color: #E9A825;"></span> <span class="pattern bgctextcolor" style="background-color: #67B7E1;"></span> <span class="pattern bgctextcolor" style="background-color: #F05858;"></span> <span class="pattern bgctextcolor" style="background-color: #E67FB9;"></span> <span class="pattern bgctextcolor" style="background-color: #9E9E9E;"></span> <span class="pattern bgctextcolor" style="background-color: #AB8B65;"></span> <span class="pattern bgctextcolor" style="background-color: #111111;"></span> <span class="pattern bgctextcolor" style="background-color: #EFECEC;"></span> <span class="bgctextcolor STYLERESET" style="">Reset</span>
<input type="hidden"
             class="tpl-field"
             data-selector="body,p"
             value = "<?php if(isset($data['textcolor']) and isset($data['textcolor']['value'])){ print $data['textcolor']['value']; } ?>"
             name="textcolor"
             id="textcolor"
             data-property="color" />
<div class="vSpace"></div>
<hr>
<label class="mw-ui-label">Link Color</label>
<span class="pattern bgclinkcolor" style="background-color: #A0CE4E;"></span> <span class="pattern bgclinkcolor" style="background-color: #9DB668;"></span> <span class="pattern bgclinkcolor" style="background-color: #E9A825;"></span> <span class="pattern bgclinkcolor" style="background-color: #67B7E1;"></span> <span class="pattern bgclinkcolor" style="background-color: #F05858;"></span> <span class="pattern bgclinkcolor" style="background-color: #E67FB9;"></span> <span class="pattern bgclinkcolor" style="background-color: #9E9E9E;"></span> <span class="pattern bgclinkcolor" style="background-color: #AB8B65;"></span> <span class="pattern bgclinkcolor" style="background-color: #111111;"></span> <span class="pattern bgclinkcolor" style="background-color: #EFECEC;"></span> <span class="bgclinkcolor STYLERESET" style="">Reset</span>
<input type="hidden"
             class="tpl-field"
             data-selector=".container a"
             value = "<?php if(isset($data['linkcolor']) and isset($data['linkcolor']['value'])){ print $data['linkcolor']['value']; } ?>"
             name="linkcolor"
             id="linkcolor"
             data-property="color" />
<div class="vSpace"></div>
<hr>
<label class="mw-ui-label">Title color</label>
<span class="pattern bgc" style="background-color: #A0CE4E;"></span> <span class="pattern bgc" style="background-color: #9DB668;"></span> <span class="pattern bgc" style="background-color: #E9A825;"></span> <span class="pattern bgc" style="background-color: #67B7E1;"></span> <span class="pattern bgc" style="background-color: #F05858;"></span> <span class="pattern bgc" style="background-color: #E67FB9;"></span> <span class="pattern bgc" style="background-color: #9E9E9E;"></span> <span class="pattern bgc" style="background-color: #AB8B65;"></span> <span class="pattern bgc" style="background-color: #111111;"></span> <span class="pattern bgc" style="background-color: #EFECEC;"></span> <span class="bgc STYLERESET" style="">Reset</span>
<input type="hidden"
             class="tpl-field"
             data-selector="h1,h2,h3,h4,h5,h6,.btn,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a, a.lead"
             value = "<?php if(isset($data['headerbg']) and isset($data['headerbg']['value'])){ print $data['headerbg']['value']; } ?>"
             name="headerbg"
             id="headerbg"
             data-property="color" />
<div class="mw_clear"></div>
<br />
<module type="content/layout_selector_custom_css" template="<?php print template_name(); ?>" />
