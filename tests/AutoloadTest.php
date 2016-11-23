<?php

require_once (__DIR__ . '/../_autoload/autoload.php');

use \Tests\Dir1\One;
use \Tests\Dir1\Dir2\Two;
use \Tests\Dir1\Dir2\Dir3\Dir7\Seven;

echo "<br>";
echo "<br>";
echo "<br>";

new One();
new Two();
//new Three();
// new Four();
// new Five();
// new Six();

echo "<br>";
Seven::getEcho();
echo "<br>";


echo "<br>";
echo "<br>";

// $fileName = '/Dir1/Test/One.php';
// $fileName = strtolower($fileName);
// echo $fileName;
// echo "<br>";
// $last = strrchr($fileName, '/');
// $uc = '/' . ucfirst(substr(strrchr($fileName, '/'), strrchr($fileName, '/')+1));
// echo str_replace($last, $uc, $fileName);

// function getClassName($class)
//     {
//         $className = ltrim($class, "\\");
//         $fileName = "";
//         $namespace = "";
        
//         if($lastNsPos = strrpos($className, '\\')):
//             $namespace = substr($className, 0, $lastNsPos);
//             $className = substr($className, $lastNsPos + 1);
//             $fileName = str_replace("\\", '/', $namespace) . '/';
//         endif;
        
//         $fileName = strtolower($fileName . $className);
//         $last = strrchr($fileName, '/');
//         $uc = '/' . ucfirst(substr(strrchr($fileName, '/'), strrchr($fileName, '/')+1));
        
//         return str_replace($last, $uc, $fileName);
//     }

//     echo getClassName('\Hello\Dir\Test.php');