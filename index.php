<?php

namespace UserExpirance;

use UserExpirance\Events\Cookie;

class UExp
{
    public function __construct()
    {
        if(!is_admin()) {
            $cookieResult = Cookie::check();
        }
    }


}
