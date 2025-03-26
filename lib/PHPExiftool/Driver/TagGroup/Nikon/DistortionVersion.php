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
class DistortionVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:DistortionVersion';

    protected string $name = 'DistortionVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Distortion Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::DistortInfo
             * line : 130228
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Nikon::DistortInfo.Nikon:DistortionVersion',
            'desc' => [
                'en' => 'Distortion Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
