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
class HighISONoiseReduction2 extends AbstractTagGroup
{
    protected string $id = 'Sony:HighISONoiseReduction2';

    protected string $name = 'HighISONoiseReduction2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'High ISO Noise Reduction 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 250673
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:HighISONoiseReduction2',
            'desc' => [
                'en' => 'High ISO Noise Reduction 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
