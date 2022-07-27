<?php

namespace App;

class HappyNumber
{
    public array $histories = [];
    public array $digits;
    public int $happyNumber;


    public function isHappyNumber(): bool
    {
        $status = false;
        do {
            $total = 0;
            error_log(json_encode($this->getHistories()));
            if(array_search($this->getHappyNumber(),$this->getHistories()) != null){
                break;
            }
            $digits = array_map('intval', str_split($this->getHappyNumber()));
            foreach ($digits as $item => $value) {
                $total += ($value * $value);
            }
            
            error_log($total);

            
            $this->addHistory($total);
            $this->setHappyNumber($total);
            if ($total == 1) {
                $status = true;
                break;
            }
            unset($total);
            
        } while ($this->getHappyNumber() != 1);
        return $status;
    }

    public function addHistory($value): void
    {
        $this->histories[] = $value;
    }

    public function getHappyNumber(): int
    {
        return $this->happyNumber;
    }
    public function getHistories(): array
    {
        return $this->histories;
    }

    public function setDigits(array $value): void
    {
        $this->digits = $value;
    }

    public function setHappyNumber(int $value): void
    {
        $this->happyNumber = $value;
    }
}
