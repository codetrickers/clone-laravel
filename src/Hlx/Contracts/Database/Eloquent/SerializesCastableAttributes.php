<?php

namespace Hlx\Contracts\Database\Eloquent;

use Hlx\Database\Eloquent\Model;

interface SerializesCastableAttributes
{
    /**
     * Serialize the attribute when converting the model to an array.
     *
     * @param  \Hlx\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function serialize(Model $model, string $key, mixed $value, array $attributes);
}