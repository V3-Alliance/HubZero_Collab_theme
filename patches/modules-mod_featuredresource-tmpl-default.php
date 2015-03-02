--- default.php_original	2015-03-02 16:49:34.383777404 +1100
+++ default.php	2015-03-02 16:33:53.591746385 +1100
@@ -48,7 +48,9 @@
 		<p>
 			<a href="<?php echo JRoute::_('index.php?option=com_resources&id=' . $this->id); ?>">
 				<?php echo stripslashes($this->row->title); ?>
-			</a>: 
+			</a><?php if ($this->id != "" ) 
+				echo ":";
+			?>
 		<?php if ($this->row->introtext) { ?>
 			<?php echo Hubzero_View_Helper_Html::shortenText(htmlentities(strip_tags($this->row->introtext)), $this->txt_length, 0); ?>
 		<?php } ?>
