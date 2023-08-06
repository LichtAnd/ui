<?php

namespace LichtAnd\Ui\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LichtAnd\Ui\Ui
 */
class Ui extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LichtAnd\Ui\Ui::class;
    }
}
