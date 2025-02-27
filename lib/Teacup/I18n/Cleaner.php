<?php

/**
 * Cleaner.php
 *
 * @author    iizno jerome@teacup.fr
 * @version   1.0.0
 */

namespace Teacup\I18n;

/**
 * Class Cleaner
 *
 * This class cleans a translation
 *
 * @package Teacup\I18n
 * 
 */
class Cleaner
{
    /**
     * Finds a localized string from the cache
     * 
     * @param  mixed $translation
     * @param  array  $vars
     * 
     * @return string
     */
    public function clean ( $translation, $vars=[], $count=1 )
    {
        if ( is_array( $translation ) )
        {
            $vars['count'] = $count;

            $translation = $this->cleanArray( $translation, $count );
        }

        foreach ( $vars as $key => $value )
            $translation = str_replace( ":{$key}", $value, $translation );
        
        return $translation;
    }

    private function cleanArray ( $translation, $count )
    {

        if ( $count == 1 && array_key_exists( 'one', $translation ) )
            return $translation['one'];
        elseif ( $count != 1 && array_key_exists( 'other', $translation ) )
            return $translation['other'];

        return '';
    }
}
