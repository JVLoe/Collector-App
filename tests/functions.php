<?php
require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase {

    public function testSuccessShowKeyAndValue()
    {
        $input =
            [
                'name' => 'Venus',
                'temperature' => '475C',
                'colour' => 'Yellow-White',
                'size' => '6051.8 km'
            ];
        $expectedOutput = '<p>name: Venus</p><p>temperature: 475C</p><p>colour: Yellow-White</p><p>size: 6051.8 km</p>';
        $actualOutput = showKeyAndValue($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
};
