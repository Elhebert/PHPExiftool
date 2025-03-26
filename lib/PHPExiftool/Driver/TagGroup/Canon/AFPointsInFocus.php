<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsInFocus extends AbstractTagGroup
{
    protected string $id = 'Canon:AFPointsInFocus';

    protected string $name = 'AFPointsInFocus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Points In Focus',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFInfo
             * line : 2574
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo.Canon:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::AFInfo2
             * line : 2670
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo2.Canon:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52760
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
