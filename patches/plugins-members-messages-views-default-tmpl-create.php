43c43
< <form action="<?php echo JRoute::_('index.php?option='.$option.'&id='.$this->member->get('uidNumber').'&active=messages'); ?>" method="post" id="hubForm<?php if ($this->no_html) { echo '-ajax'; }; ?>">
---
> <form action="<?php echo JRoute::_('index.php?option='.$this->option.'&id='.$this->member->get('uidNumber').'&active=messages'); ?>" method="post" id="hubForm<?php if ($this->no_html) { echo '-ajax'; }; ?>">
78c78
< 	<input type="hidden" name="option" value="<?php echo $option; ?>" />
---
> 	<input type="hidden" name="option" value="<?php echo $this->option; ?>" />
