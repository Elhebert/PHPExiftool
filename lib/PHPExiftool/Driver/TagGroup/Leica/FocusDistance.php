<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusDistance extends AbstractTagGroup
{
    protected string $id = 'Leica:FocusDistance';

    protected string $name = 'FocusDistance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::FocusInfo
             * line : 191304
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::FocusInfo.Leica:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Leica6
             * line : 191665
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica6.Leica:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
        2 => [
            /**
             * table_name : Panasonic::Leica9
             * line : 191684
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Leica9.Leica:FocusDistance',
            'desc' => [
                'en' => 'Focus Distance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
