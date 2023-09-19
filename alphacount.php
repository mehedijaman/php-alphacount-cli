#! /usr/bin/env php

<?php 
    require_once 'vendor/autoload.php';

    use Mehedi\PhpAlphacountCli\Helper;

    if($argc < 2){
        exit("Please input a valid text\n");
    }

    $inputString = $argv[1];
    
    $total = Helper::alphaCount($inputString); 
    print "Total Character count in $inputString is : $total\n";