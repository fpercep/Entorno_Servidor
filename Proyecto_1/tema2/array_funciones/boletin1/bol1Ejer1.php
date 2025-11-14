<?php
    $entero = 1;
    $decimal= 0.2;
    $cadena = "Hola Mundo";
    $boolean = false;
    $null = null;

    echo "\n $entero";
    echo gettype($entero);
    echo is_int($entero);
    echo is_float($entero);
    echo is_string($entero);
    echo is_bool($entero);
    echo empty($entero);
    echo isset($entero);

echo "\n $decimal";
    echo gettype($decimal);
    echo is_int($decimal);
    echo is_float($decimal);
    echo is_string($decimal);
    echo is_bool($decimal);
    echo empty($decimal);
    echo isset($decimal);

echo "\n $cadena";
    echo gettype($cadena);
    echo is_int($cadena);
    echo is_float($cadena);
    echo is_string($cadena);
    echo is_bool($cadena);
    echo empty($cadena);
    echo isset($cadena);

echo "\n $boolean";
    echo is_int($boolean);
    echo is_float($boolean);
    echo is_string($boolean);
    echo is_bool($boolean);
    echo empty($boolean);
    echo isset($boolean);

echo "\n $boolean";
    echo gettype($null);
    echo is_int($null);
    echo is_float($null);
    echo is_string($null);
    echo is_bool($null);
    echo empty($null);
    echo isset($null);
