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
class PrimaryAFPoint extends AbstractTagGroup
{
    protected string $id = 'Canon:PrimaryAFPoint';

    protected string $name = 'PrimaryAFPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Primary AF Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::AFInfo
             * line : 2577
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo.Canon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::AFInfo
             * line : 2583
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo.Canon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::AFInfo2
             * line : 2679
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::AFInfo2.Canon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
