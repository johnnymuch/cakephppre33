<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\HellosBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\HellosBehavior Test Case
 */
class HellosBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\HellosBehavior
     */
    public $Hellos;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Hellos = new HellosBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hellos);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
