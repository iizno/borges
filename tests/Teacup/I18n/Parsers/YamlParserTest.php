<?php

use Teacup\I18n\Parsers\YamlParser as Parser;

class YamlParserTest extends TestCase
{
    private $parser;

    public function setUp ()
    {
        parent::setUp();

        $this->parser = new Parser();
    }

    public function testParse ()
    {
        $file       = file_get_contents( $this->fixturesPath . '/test.yml' );
        $expected   = [ 'foo' => [ 'foo1' => 'foo1', 'foo2' => 'foo2' ] ];

        $this->assertEquals( $expected, $this->parser->parse( $file ) );
    }
}
