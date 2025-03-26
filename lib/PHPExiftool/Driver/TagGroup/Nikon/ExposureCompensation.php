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
class ExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'Nikon:ExposureCompensation';

    protected string $name = 'ExposureCompensation';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Exposure Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 129935
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MOV
             * line : 132797
             * type : rational64s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MOV.Nikon:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 136996
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:ExposureCompensation',
            'desc' => [
                'en' => 'Exposure Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
