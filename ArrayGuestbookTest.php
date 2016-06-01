<?php
class ArrayGuestbookTest extends PHPUnit_Extensions_Database_DataSet_TestCase
{
    protected function getDataSet()
    {
        return new MyApp_DbUnit_ArrayDataSet(array(
            'guestbook' => array(
                array('id' => 1, 'content' => 'Hello buddy!', 'user' => 'joe', 'created' => '2010-04-24 17:15:23'),
                array('id' => 2, 'content' => 'I like it!',   'user' => null,  'created' => '2010-04-26 12:14:20'),
            ),
        ));
    }
}