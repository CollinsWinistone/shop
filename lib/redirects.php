<?php

/**
 * @author Collins Simiyu Wanjala
 * This class contains various redirects utilities
 * such as LOGIN_URL etc
 */

 class RedirectRequest
 {
     private $redirect_url;//login URL

     /**
      * Redirects a request to a specified URL
      *
      * @param string $url -The url to redirect to
      * @return void
      */
     public function redirect(string $url)
     {
        header("Location: $url");

     }
     
 }

?>