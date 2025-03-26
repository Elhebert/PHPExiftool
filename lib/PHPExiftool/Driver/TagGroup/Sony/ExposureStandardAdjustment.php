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
class ExposureStandardAdjustment extends AbstractTagGroup
{
    protected string $id = 'Sony:ExposureStandardAdjustment';

    protected string $name = 'ExposureStandardAdjustment';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Standard Adjustment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 248238
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:ExposureStandardAdjustment',
            'desc' => [
                'en' => 'Exposure Standard Adjustment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
