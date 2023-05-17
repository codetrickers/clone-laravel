<?php

namespace Hlx\Database\Eloquent;

interface Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Hlx\Database\Eloquent\Builder  $builder
     * @param  \Hlx\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model);
}
