<?php namespace Tests\Dir1\Dir2\Dir3\Dir7;

/**
* 
*/
class Seven
{
	
	private function __construct()
	{}

    public static function getEcho()
    {
        var_dump('Seven!');
        echo "<br>";
    }


}