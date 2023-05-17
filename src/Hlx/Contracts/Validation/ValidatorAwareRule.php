<?php

namespace Hlx\Contracts\Validation;

use Hlx\Validation\Validator;

interface ValidatorAwareRule
{
    /**
     * Set the current validator.
     *
     * @param  \Hlx\Validation\Validator  $validator
     * @return $this
     */
    public function setValidator(Validator $validator);
}
