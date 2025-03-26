<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLength extends AbstractTagGroup
{
    protected string $id = 'Kodak:FocalLength';

    protected string $name = 'FocalLength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Free
             * line : 106064
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Free.Kodak:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::MOV
             * line : 108648
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::MOV.Kodak:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109461
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::Type10
             * line : 109531
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type10.Kodak:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
