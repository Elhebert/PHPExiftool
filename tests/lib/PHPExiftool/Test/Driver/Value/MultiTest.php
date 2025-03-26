<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test\Driver\Value;

use PHPExiftool\Driver\Value\Multi;
use PHPExiftool\Driver\Value\ValueInterface;
use PHPUnit\Framework\TestCase;

class MultiTest extends TestCase
{
    protected Multi $object;

    /**
     * @covers Multi::__construct
     */
    protected function setUp(): void
    {
        $this->object = new Multi(['hello', 'world !']);
    }

    /**
     * @covers Multi::getType
     */
    public function test_get_type(): void
    {
        $this->assertEquals(ValueInterface::TYPE_MULTI, $this->object->getType());
    }

    /**
     * @covers Multi::asArray
     */
    public function test_as_array(): void
    {
        $this->assertEquals(['hello', 'world !'], $this->object->asArray());
    }

    /**
     * @covers Multi::addValue
     */
    public function test_add_value(): void
    {
        $this->object->addValue('tim');
        $this->assertEquals(['hello', 'world !', 'tim'], $this->object->asArray());
    }

    /**
     * @covers Multi::reset
     */
    public function test_reset(): void
    {
        $this->object->reset();
        $this->assertEquals([], $this->object->asArray());
    }
}
