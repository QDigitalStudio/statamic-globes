<div class="container">
  <form action="<?php echo $app->urlFor('globes') . '/update' ?>" method="post" class="primary-form">
    <div class="section content">
      <?php foreach ($globals as $key => $field): ?>
      <?php
      $input_key = 'globals';
      $label     = array_key_exists('display',$field) ? $field['display'] : Slug::prettify($field['name']);
      $type      = array_key_exists('type',$field) ? $field['type'] : 'text';
      $value     = array_key_exists('value',$field) ? $field['value'] : null;
      ?>
			<?php if ($key === 'error'): ?>
				<p><b><?php echo $setting; ?></b></p>
				<pre>
				global:
  			  variable: default value
  				- or -
  				variable_name:
				</pre>
			<?php else: ?>
      <div class="input-block input-<?php echo $type;?>">
        <?php print Fieldtype::render_fieldtype($type, $key, $field, $value, tabindex(), $input_key);?>
      </div>
			<?php endif; ?>
      <?php endforeach; ?>
  	</div>
  	<div id="publish-action" class="footer-controls push-down">
    	<input type="submit" class="btn" value="Save &amp; Publish" id="publish-submit">
  	</div>
	</form>
</div>

<?php

function tabindex() {
  static $count = 1;

  return $count++;
}

?>
