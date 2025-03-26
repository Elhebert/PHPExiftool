<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool;

use PHPExiftool\Exception\DirectoryNotFoundException;
use PHPExiftool\PHPExiftool;
use PHPUnit\Framework\TestCase;

class PHPExiftoolTest extends TestCase
{
    /**
     * @covers PHPExiftool::__construct
     */
    public function test_relative_classes_root_directory(): void
    {
        $this->expectException(DirectoryNotFoundException::class);
        new PHPExiftool('./relative_dir');
    }

    /**
     * @covers PHPExiftool::__construct
     */
    public function test_bad_classes_root_directory(): void
    {
        $this->expectException(DirectoryNotFoundException::class);
        new PHPExiftool('/non_existing_dir');
    }
}
