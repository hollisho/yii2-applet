<?php

namespace hollisho\applet\Decrypt;

use yii\base\Exception;

/**
 * Class DecryptionException
 * @package hollis\applet\Decrypt
 * @author Hollis Ho
 */
class DecryptionException extends Exception
{
    const ERROR_ILLEGAL_AESKEY = -41001;
    const ERROR_ILLEGAL_IV = -41002;
    const ERROR_ILLEGAL_BUFFER = -41003;
    const ERROR_DECODE_BASE64 = -41004;
    
    public function getName()
    {
        return 'Decryption Exception';
    }

}
