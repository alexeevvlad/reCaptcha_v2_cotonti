<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
Order=10
[END_COT_EXT]

==================== */

/**
 * reCAPTCHA Plugin for Cotonti
 *
 * @package recaptchag
 * @version 2.0
 * @author Alexeev vlad
 * @copyright Copyright (c) Alexeev vlad
 * @license Free
 */

defined('COT_CODE') or die('Wrong URL');

include_once cot_incfile('recaptcha', 'plug');
include_once cot_langfile('recaptcha', 'plug');

$cot_captcha[]='recaptcha';


?>
