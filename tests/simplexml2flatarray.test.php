<?php

require '../simplexml2flatarray.class.php';

class SimpleXML2FlatArray_Test extends PHPUnit_Framework_TestCase
{
    /**
     * Test SimpleXML2FlatArray::get() output is correct array
     */
    public function testGetArrayOutputIsCorrectArray()
    {
        $expected_array = array(
            array(
                "child" => "child1 value",
                "child11" => "child11 value",
                "child12" => "child12 value"
            ),
            array(
                "child" => "child2 value",
                "child21" => "child21 value",
                "child22" => "child22 value"
            )
        );
        
        $xml = simplexml_load_file('testfile.xml');
        $data = new SimpleXML2FlatArray($xml);

        $this->assertEquals($expected_array, $data->get());
    }
}
