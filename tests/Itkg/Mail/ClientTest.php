<?php
namespace Itkg\Mail;

use Itkg\Mail\Client ;
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-24 at 17:32:43.
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Client;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Itkg\Mail\Client::sendMessage
     */
    public function testSendMessage()
    {
  /*      $from = 'mytestmail4521@yopmail.com';
        $subject = 'test subject';
        $bodyText = 'test body text';
        $to = array('mytestmail4623@yopmail.com');
        $ccs = array('monmail@monfai.fr', 'testmail@testfai.fr');
        $bccs = array('tonmail@monfai.fr', 'testmail2@testfai.fr');

        $sendMessage = \Itkg\Mail\Client::sendMessage($from, $subject, $bodyText, $to, $ccs, $bccs);
        $this->assertTrue($sendMessage);
        
        $from = '';
        $sendMessage = \Itkg\Mail\Client::sendMessage($from, $subject, $bodyText, $to);
        $this->assertNotEmpty($sendMessage);
        
        $from = 'clement.guinet@businessdecision.com';
        $subject = '';
        $sendMessage = \Itkg\Mail\Client::sendMessage($from, $subject, $bodyText, $to);
        $this->assertNotEmpty($sendMessage);

        
        $attachements = array('/home/ubuntu/Bureau/diable.jpg');
        $subject = 'test subject';
        $sendMessage = \Itkg\Mail\Client::sendMessage($from, $subject, $bodyText, $to, '','',$attachements);
        $this->assertTrue($sendMessage); */
    }
}
