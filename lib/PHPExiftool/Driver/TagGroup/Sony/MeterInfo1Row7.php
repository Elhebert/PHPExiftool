<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeterInfo1Row7 extends AbstractTagGroup
{
    protected string $id = 'Sony:MeterInfo1Row7';

    protected string $name = 'MeterInfo1Row7';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Meter Info 1 Row 7',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MeterInfo
             * line : 250776
             * type : int32u
             * writable : true
             * count : 27
             * flags : permanent
             */
            'id' => 'Sony::MeterInfo.Sony:MeterInfo1Row7',
            'desc' => [
                'en' => 'Meter Info 1 Row 7',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MeterInfo9
             * line : 250828
             * type : undef
             * writable : false
             * count : 90
             * flags : permanent
             */
            'id' => 'Sony::MeterInfo9.Sony:MeterInfo1Row7',
            'desc' => [
                'en' => 'Meter Info 1 Row 7',
            ],
        ],
    ];

    protected int $flags = 2052;
}
