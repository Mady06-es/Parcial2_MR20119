<?php

namespace App\Equipo;


abstract class Equipo {

public int  $codigo ;

public string $nombre;


public __construct(readonly int  $codigo, readonly string $nombre ){


}



}



$equipo = new Equipo(1234, "laptop");





?>