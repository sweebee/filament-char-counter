<?php

namespace Wiebenieuwenhuis\FilamentCharCounter;

use Filament\Forms\Components\Textarea as FilamentTextarea;
use Wiebenieuwenhuis\FilamentCharCounter\Concerns\HasCharacterLimit;

class Textarea extends FilamentTextarea
{
    use HasCharacterLimit;

    protected string $view = 'filament-char-counter::textarea';
}
