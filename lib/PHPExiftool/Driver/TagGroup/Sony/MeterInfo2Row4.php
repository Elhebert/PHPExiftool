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
class MeterInfo2Row4 extends AbstractTagGroup
{
    protected string $id = 'Sony:MeterInfo2Row4';

    protected string $name = 'MeterInfo2Row4';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Meter Info 2 Row 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MeterInfo
             * line : 250788
             * type : int32u
             * writable : true
             * count : 33
             * flags : permanent
             */
            'id' => 'Sony::MeterInfo.Sony:MeterInfo2Row4',
            'desc' => [
                'en' => 'Meter Info 2 Row 4',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MeterInfo9
             * line : 250840
             * type : undef
             * writable : false
             * count : 110
             * flags : permanent
             */
            'id' => 'Sony::MeterInfo9.Sony:MeterInfo2Row4',
            'desc' => [
                'en' => 'Meter Info 2 Row 4',
            ],
        ],
    ];

    protected int $flags = 2052;
}
