<?php

namespace SOLID\LSP;

class LSPViolationType
{
    protected int $salary;

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function calculateSalary(int $tax)
    {
        if ($tax <= 10) {
            var_dump('Sorry tax must be more than 10%');
        }
        return $this->getSalary() - ($this->getSalary() * $tax / 100);
    }
}
