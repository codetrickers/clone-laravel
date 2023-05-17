<?php

namespace Hlx\Database\Eloquent\Casts;

use Hlx\Contracts\Database\Eloquent\Castable;
use Hlx\Contracts\Database\Eloquent\CastsAttributes;
use Hlx\Support\Str;

class AsStringable implements Castable
{
    /**
     * Get the caster class to use when casting from / to this cast target.
     *
     * @param  array  $arguments
     * @return \Hlx\Contracts\Database\Eloquent\CastsAttributes<\Hlx\Support\Stringable, string|\Stringable>
     */
    public static function castUsing(array $arguments)
    {
        return new class implements CastsAttributes
        {
            public function get($model, $key, $value, $attributes)
            {
                return isset($value) ? Str::of($value) : null;
            }

            public function set($model, $key, $value, $attributes)
            {
                return isset($value) ? (string) $value : null;
            }
        };
    }
}
