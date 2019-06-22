<?php

/**
 * YamlParser.php
 *
 * @author    iizno jerome@teacup.fr
 * @version   1.0.0
 */

namespace Teacup\I18n\Parsers;

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Exception\ParseException;

/**
 * Class YamlParser
 *
 * This class interacts with the symfony yaml component
 * to read yaml locale files
 *
 * @package Teacup\I18n\Parsers
 * 
 */
class YamlParser
{
    private $parser;

    public function __construct ()
    {
        $this->parser = new Parser();
    }

    /**
     * Parses a yaml file into a php array
     * 
     * @param  string $file
     * @return array
     */
    public function parse ( $file )
    {
        try
        {
            return $this->parser->parse( $file );
        }
        catch ( ParseException $e )
        {
            return '';
        }
    }
}
