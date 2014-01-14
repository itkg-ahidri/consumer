<?php
namespace Itkg\Exception;

use Itkg\Exception\ValidationException;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-07 at 11:03:30.
 */
class ValidationExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ValidationException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ValidationException(array("UN messAAAAge"));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testConstruct()
    {
        $aMessages = array("UN messAAAAge");
        $this->object->__construct($aMessages);
        $this->assertEquals($aMessages, $this->object->getAllMessages());
    }
    
    /**
     * @covers Itkg\Exception\ValidationException::getAllMessages
     *
     */
    public function testGetAllMessages()
    {
        $aTestMessages = array("UN messAAAAge");        
        $this->assertEquals($aTestMessages, $this->object->getAllMessages());
        
        $aTestMessagesAgain = array("blablabla", "blabla");
        $this->assertNotEquals($aTestMessagesAgain, $this->object->getAllMessages());
        
    }

    /**
     * @covers Itkg\Exception\ValidationException::getParameterMessage
     * 
     */
    public function testGetParameterMessage()
    {
        $aMessages = array("UN messAAAAge");
        $this->assertEquals($aMessages[0], $this->object->getParameterMessage("0"));
        
    }
}
