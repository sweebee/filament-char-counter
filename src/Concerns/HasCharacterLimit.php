<?php

namespace Wiebenieuwenhuis\FilamentCharCounter\Concerns;

trait HasCharacterLimit
{
    protected $characterLimit = 0;

    public function characterLimit(int $value): self
    {
        $this->characterLimit = $value;
        return $this;
    }

    public function getCharacterLimit(): int
    {
        if($this->maxLength){
            return $this->maxLength;
        }
        return $this->characterLimit;
    }
}
