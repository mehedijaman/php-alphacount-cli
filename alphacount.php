#! /usr/bin/env php

<?php 

    $text = $argv[1];
    
    $total_alphabet = alphaCount($text);
    print "Total Character count in $text is : $total_alphabet\n";

    function alphaCount(string $text): int {
        // turns string into array
        $text_arr = str_split($text);

        $total = 0;
        foreach($text_arr as $char) {
            // check if character is alphabet or not. returns boolean value
            if(ctype_alpha($char))
                $total++;
        }

        return $total;
    }