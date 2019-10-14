<?php
//openssl rsa -RSAPublicKey_in -in psk1.pem -pubout
$public_key = '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCzxh67pGWcTONjkofuhx8fSPeT
Dql3mRx6/jzEQv6klkMhLn1XDIU/NoBlzFeiAUZm2orn1JP9R9FxwNiU7uPtf5n2
eYt//XtYcyJwOK0j4xl2MajLZCITufJ9SQGrDZK/onVCrokIVTlu2Sd1JVyXf1ww
Lx5+1LHjacEstrGCLwIDAQAB
-----END PUBLIC KEY-----';

$data = str_pad('password_severtime', 128, chr(0));
//var_dump("$data");
openssl_public_encrypt(strrev($data), $res, $public_key, OPENSSL_NO_PADDING);

$res = bin2hex($res);

echo $res;
?>