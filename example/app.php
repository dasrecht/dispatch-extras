<?php
include './vendor/autoload.php';
include '../src/dispatch-extras.php';

config('dispatch.extras.crypt_key', 's3cr3t');

$plain_text = 'dispatch-extras';
$crypt_text = encrypt($plain_text);

debug('Asserting encryption works');
assert($plain_text !== $crypt_text);
assert($plain_text === decrypt($crypt_text));
debug('If you didn\'t see errors, then it worked');
?>
