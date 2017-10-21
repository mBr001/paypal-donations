<?php
  class Helper
  {
    public static function getClientIp() {
      if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
      if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
      return $_SERVER['REMOTE_ADDR'];
    }

    public static function redirect($location) {
      header('Location: ' . $location);
      die();
    }
  }
