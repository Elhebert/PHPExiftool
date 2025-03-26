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
class MultiExposureAutoGain extends AbstractTagGroup
{
    protected string $id = 'Nikon:MultiExposureAutoGain';

    protected string $name = 'MultiExposureAutoGain';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Multi Exposure Auto Gain',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MultiExposure
             * line : 136871
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MultiExposure.Nikon:MultiExposureAutoGain',
            'desc' => [
                'en' => 'Multi Exposure Auto Gain',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
