37c37
< 		<form action="index.php" name="hubForm" id="attachments-form" method="post" enctype="multipart/form-data">
---
> 		<form action="index.php?option=<?php echo $this->option; ?>&amp;tmpl=component&amp;controller=<?php echo $this->controller; ?>&amp;task=save" name="hubForm" id="attachments-form" method="post" enctype="multipart/form-data">
