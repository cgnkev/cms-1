<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>

<?= $this->Form->input('publisherKey', ['type' => 'text', 'label' => __d('captcha', 'Publisher Key *')]); ?>
<em class="help-block"><?= __d('captcha', 'e.g. 310203ef720d21451c2516f2633c645acadc225a'); ?></em>

<?= $this->Form->input('scoringKey', ['type' => 'text', 'label' => __d('captcha', 'Scoring Key *')]); ?>
<em class="help-block"><?= __d('captcha', 'e.g. 6233426d2e41a5c37d11c65202fa23c1fca50520'); ?></em>