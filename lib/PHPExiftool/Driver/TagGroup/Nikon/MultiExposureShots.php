<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MultiExposureShots extends AbstractTagGroup
{
    protected string $id = 'Nikon:MultiExposureShots';

    protected string $name = 'MultiExposureShots';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Multi Exposure Shots',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135338
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:MultiExposureShots',
            'desc' => [
                'en' => 'Multi Exposure Shots',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MultiExposure
             * line : 136868
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MultiExposure.Nikon:MultiExposureShots',
            'desc' => [
                'en' => 'Multi Exposure Shots',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
