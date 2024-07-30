<?php

namespace SOLID\LSP;

class Encrypt
{
    private string $string;

    public function getString(): string
    {
        return $this->string;
    }

    public function setString(string $string): void
    {
        $this->string = $string;
    }

    public function encryptString()
    {
        return md5($this->getString());
    }
}
