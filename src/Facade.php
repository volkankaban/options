<?php 

namespace Volkankaban\Options;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return Options::class;
    }
}
