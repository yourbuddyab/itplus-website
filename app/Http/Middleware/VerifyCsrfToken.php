<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/backend/category/insertCategory','/backend/category/updateCategory','/backend/services/insertService',
        '/backend/services/updateservice','/backend/about/insertAbout','/backend/about/updatecontent',
        '/backend/contact/insertContact','/backend/contact/updateContact','/insertcontact'
    ];
}
