<?php

namespace SOLID\LSP;

class EncryptSubType extends Encrypt
{
    public function encryptString()
    {
        return sha1($this->getString());
    }
}