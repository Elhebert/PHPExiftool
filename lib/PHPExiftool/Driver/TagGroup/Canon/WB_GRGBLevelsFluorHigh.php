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
class WB_GRGBLevelsFluorHigh extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_GRGBLevelsFluorHigh';

    protected string $name = 'WB_GRGBLevelsFluorHigh';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB GRGB Levels Fluor High',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::WBInfo
             * line : 53171
             * type : int32s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::WBInfo.Canon:WB_GRGBLevelsFluorHigh',
            'desc' => [
                'en' => 'WB GRGB Levels Fluor High',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
