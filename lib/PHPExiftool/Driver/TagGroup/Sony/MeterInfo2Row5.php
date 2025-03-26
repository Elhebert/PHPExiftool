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
class MeterInfo2Row5 extends AbstractTagGroup
{
    protected string $id = 'Sony:MeterInfo2Row5';

    protected string $name = 'MeterInfo2Row5';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MeterInfo
             * line : 359681
             * type : int32u
             * writable : true
             * count : 33
             * flags : permanent
             */
            'id' => 'Sony::MeterInfo.Sony:MeterInfo2Row5',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MeterInfo9
             * line : 359733
             * type : undef
             * writable : false
             * count : 110
             * flags : permanent
             */
            'id' => 'Sony::MeterInfo9.Sony:MeterInfo2Row5',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
