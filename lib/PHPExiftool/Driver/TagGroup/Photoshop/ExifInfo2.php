<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExifInfo2 extends AbstractTagGroup
{
    protected string $id = 'Photoshop:ExifInfo2';

    protected string $name = 'ExifInfo2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 305588
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'Photoshop::Main.Photoshop:ExifInfo2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
