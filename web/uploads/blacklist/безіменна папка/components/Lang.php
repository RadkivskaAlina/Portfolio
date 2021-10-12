<?php


class Lang
{
    public static $lang = 'ru';

    public static function t($str)
    {
        $local = self::getLocalization();
        return $local[$str];
    }

    public static function getUserLang()
    {
        if (isset($_COOKIE['lang'])){
            self::$lang = $_COOKIE['lang'];
        }
        return self::$lang;
    }

    public static function getLocalization()
    {
        return include ROOT . '/local/' . self::getUserLang() . '.php';
    }

    public static function setLang($str)
    {
        setcookie('lang', $str);
        print_r($_COOKIE);
    }

}