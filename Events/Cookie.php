<?php

namespace UserExpirance\Events;

/**
 * CookieEvent class, which is used to check if the cookie is set
 */
static class CookieEvent
{
      /**
       * Check function is used to check if the cookie is set
       * @param none
       * @return boolean
       */
      static public function check()
      {
        if(!isset($_COOKIE['user_expirance'])) {
            return false;
        } else {
            if($_COOKIE['user_expirance'] == 1) {
                return true;
            } else {
                return false;
            }
        }
     }
}
