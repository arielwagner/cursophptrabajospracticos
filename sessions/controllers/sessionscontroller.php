<?php

require_once 'models/squeries.php';
require_once 'models/dqueries.php';

class SessionsController
{
    
    public static function getStartLogon($usr, $pss)
    {
        try
        {
            $res = '';
            $rs = new SQueries();
            $qry = "SELECT * FROM users WHERE user = '"
                .$usr."' AND password = '".$pss."';";
            foreach($rs->getQuery($qry) as $rows)
            {
                $res = $rows['user'];
            }
            return $res;             
        }
        catch(Exception $ex)
        {
            return '';
        }
    }
    
    public static function getRescueUsername($quest)
    {
        try 
        {
            $rs = new SQueries();
            $qry = "SELECT * FROM users WHERE secretquest = '".$quest."';";
            return $rs->getQuery($qry);
        }
        catch(Exception $ex)
        {
            return '';
        }
    }
    
    public static function addNewUser($userName, $password, $secretQuest)
    {
        try
        {
            $nqry = new DQueries();
            $qry = "INSERT INTO users (id, user, password, secretquest) ";
            $qry .= "VALUES (null, '".$userName."', '".$password."', '".$secretQuest."');";
            $nqry->executeNonQuery($qry);
            return true;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }
}
?>