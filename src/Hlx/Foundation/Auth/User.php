<?php

namespace Hlx\Foundation\Auth;

use Hlx\Auth\Authenticatable;
use Hlx\Auth\MustVerifyEmail;
use Hlx\Auth\Passwords\CanResetPassword;
use Hlx\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Hlx\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Hlx\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Hlx\Database\Eloquent\Model;
use Hlx\Foundation\Auth\Access\Authorizable;

class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;
}
