<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.add.first
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
    $response = cot_import('g-recaptcha-response', 'P', 'TXT');

    if (!cot_recaptcha_valid($response))
    {
        cot_error('recaptcha_verification_failed', 'response');
    }
}

?>
