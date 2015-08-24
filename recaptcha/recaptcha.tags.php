<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.tags
Tags=users.register.tpl:{USERS_REGISTER_VERIFYIMG}
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

if ($cfg['captchamain'] == 'recaptcha')
{
$t->assign(array(
    "USERS_REGISTER_VERIFYIMG" => recaptcha_generate(),
    ));
}
?>
