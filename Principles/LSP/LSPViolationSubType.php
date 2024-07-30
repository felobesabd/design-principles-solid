<?php

namespace SOLID\LSP;

class LSPViolationSubType extends LSPViolationType
{
    public function calculateSalary(int $tax)
    {
        if ($tax < 15) {
            var_dump('Sorry tax must be more than 15%');
        }
        return $this->getSalary() - ($this->getSalary() * ($tax + 2) / 100);
    }
}