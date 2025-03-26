<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationNotes extends AbstractTagGroup
{
    protected string $id = 'IFD0:ApplicationNotes';

    protected string $name = 'ApplicationNotes';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 112630
             * type : int8u
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Exif::Main.IFD0:ApplicationNotes',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 280777
             * type : int8u
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'PanasonicRaw::Main.IFD0:ApplicationNotes',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
