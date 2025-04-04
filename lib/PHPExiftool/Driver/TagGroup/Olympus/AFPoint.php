<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPoint extends AbstractTagGroup
{
    protected string $id = 'Olympus:AFPoint';

    protected string $name = 'AFPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 175902
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 175993
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::FocusInfo
             * line : 176012
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::FocusInfo.Olympus:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
