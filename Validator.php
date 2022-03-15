<?php

class Validator
{
    public function check( $input )
    {
        if ( strlen($input) < 2 )
        {
            return false;
        }
        return true;
    }
}