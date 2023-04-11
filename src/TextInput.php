<?php

namespace Wiebenieuwenhuis\FilamentCharCounter;

use Filament\Forms\Components\TextInput as FilamentTextInput;
use Wiebenieuwenhuis\FilamentCharCounter\Concerns\HasCharacterLimit;

class TextInput extends FilamentTextInput
{
    use HasCharacterLimit;

    protected string $view = 'filament-char-counter::text-input';
}
