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
class FlashMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashMode';

    protected string $name = 'FlashMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133120
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137260
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
