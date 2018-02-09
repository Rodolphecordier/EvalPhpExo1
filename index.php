<?php
$presentation= array(
    'prenom'=> 'rodolphe',
    'nom' =>'cordier',
    'adresse' =>'rue du grand feu',
    'code postal' =>'76100',
    'vile' =>'Rouen',
    'adresse mail' =>'rodolphe76100@gmail.com',
    'telephone' =>'0700000000',
    'date de naissance' =>'1991-09-28'
);

{
    foreach ($presentation as $cle => $element)
    {
        echo '<li>'.'[' . $cle . '] ' . $element . '<br />';
    }

}