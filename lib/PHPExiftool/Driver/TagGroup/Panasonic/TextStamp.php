<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TextStamp extends AbstractTagGroup
{
    protected string $id = 'Panasonic:TextStamp';

    protected string $name = 'TextStamp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Text Stamp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 192688
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:TextStamp',
            'desc' => [
                'en' => 'Text Stamp',
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Main
             * line : 192716
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:TextStamp',
            'desc' => [
                'en' => 'Text Stamp',
            ],
        ],
        2 => [
            /**
             * table_name : Panasonic::Main
             * line : 193758
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:TextStamp',
            'desc' => [
                'en' => 'Text Stamp',
            ],
        ],
        3 => [
            /**
             * table_name : Panasonic::Main
             * line : 193769
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:TextStamp',
            'desc' => [
                'en' => 'Text Stamp',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
