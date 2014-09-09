<?php

/**
 * Parser.php
 *
 * @author    Thomas Muntaner thomas.muntaner@gmail.com
 * @version   1.0.0
 */

namespace Philasearch\I18n\Parsers;

/**
 * Class Parser
 *
 * This abstract class defines the interpretation
 * of locale files in different languages and formats
 *
 * @package Philasearch\I18n\Parsers
 * 
 */
abstact class Parser
{
    /**
     * Parses a file into a php array
     * 
     * @param  string $file
     * @return array
     */
    public function parse ( $file );
}
