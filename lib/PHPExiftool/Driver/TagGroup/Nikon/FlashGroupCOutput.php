<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashGroupCOutput extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashGroupCOutput';

    protected string $name = 'FlashGroupCOutput';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Group C Output',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 131003
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupCOutput',
            'desc' => [
                'en' => 'Flash Group C Output',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131402
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupCOutput',
            'desc' => [
                'en' => 'Flash Group C Output',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131810
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupCOutput',
            'desc' => [
                'en' => 'Flash Group C Output',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 132153
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupCOutput',
            'desc' => [
                'en' => 'Flash Group C Output',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
