<?php
abstract class Ticket implements IInformable {
    public $titulo;
    public $email;


    abstract function __construct($e, $t, $p, $r, $f, $c);

    abstract function getResumen();
}