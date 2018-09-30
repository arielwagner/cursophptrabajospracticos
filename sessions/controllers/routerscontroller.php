<?php

class RoutersController
{
    public static function homeAction()
    {
        return 'body.ctp';    
    }
    
    public static function logonAction()
    {
        return 'logon.ctp';
    }

    public static function errorLogonAction()
    {
        return 'errorlogon.ctp';
    }
    
    public static function rescueAction()
    {
        return 'rescue.ctp';
    }
    
    public static function registeredAction()
    {
        return 'register.ctp';
    }
    
    public static function aboutAction()
    {
        return 'about.ctp';
    }
}
?>