<?php

namespace Wiebenieuwenhuis\FilamentCharCounter;

use Filament\Forms\Components\Textarea as FilamentTextarea;

class Textarea extends FilamentTextarea
{
    protected string $view = 'filament-char-counter::textarea';

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
