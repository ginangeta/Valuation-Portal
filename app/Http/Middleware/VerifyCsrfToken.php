<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

use Closure;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    // public function __construct(Application $app, Encrypter $encrypter)
    // {
    //     parent::__construct($app, $encrypter);
    //     $this->except = [
    //         route('logout')
    //     ];
    // }
}
