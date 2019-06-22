<?php

/**
 * Parser.php
 *
 * @author    iizno jerome@teacup.fr
 * @version   1.0.0
 */

namespace Teacup\I18n\Parsers;

/**
 * Class Parser
 *
 * This abstract class defines the interpretation
 * of locale files in different languages and formats
 *
 * @package Teacup\I18n\Parsers
 * 
 */
abstract class Parser
{
    /**
     * Parses a file into a php array
     * 
     * @param  string $file
     * @return array
     */
    abstract public function parse ($file );
}
