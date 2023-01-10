<?php

namespace Wiebenieuwenhuis\FilamentCharCounter;

use Filament\Forms\Components\TextInput as FilamentTextInput;

class TextInput extends FilamentTextInput
{
    protected string $view = 'filament-char-counter::text-input';

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
