<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EventNumber extends AbstractTagGroup
{
    protected string $id = 'Reconyx:EventNumber';

    protected string $name = 'EventNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Event Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 232639
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:EventNumber',
            'desc' => [
                'en' => 'Event Number',
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 232748
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:EventNumber',
            'desc' => [
                'en' => 'Event Number',
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 232868
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:EventNumber',
            'desc' => [
                'en' => 'Event Number',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
