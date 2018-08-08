<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="form-group">
    <label for="lang" class="control-label">language</label>
    <select name="ne_lang">
        <option value="en" <?php if ($news->ne_lang == "en") echo       "selected='selected'";?> > English</option>
        <option value="cht" <?php if ($news->ne_lang == "cht") echo "selected='selected'";?>  >French</option>
        <option value="es" <?php if ($news->ne_lang == "es") echo "selected='selected'";?>  >Spanish</option>
    </select>
</div>