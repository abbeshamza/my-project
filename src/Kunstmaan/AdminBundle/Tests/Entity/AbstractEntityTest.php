<?php

namespace Kunstmaan\AdminBundle\Tests\Entity;

use Kunstmaan\AdminBundle\Entity\AbstractEntity;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-21 at 08:00:57.
 */
class AbstractEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractEntity
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getMockForAbstractClass('Kunstmaan\AdminBundle\Entity\AbstractEntity');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminBundle\Entity\AbstractEntity::getId
     * @covers Kunstmaan\AdminBundle\Entity\AbstractEntity::setId
     */
    public function testGetSetId()
    {
        $this->object->setId(5);
        $this->assertEquals(5, $this->object->getId());
    }

    /**
     * @covers Kunstmaan\AdminBundle\Entity\AbstractEntity::__toString
     */
    public function test__toString()
    {
        $this->object->setId(8);
        $this->assertEquals("8", $this->object->__toString());
    }
}
