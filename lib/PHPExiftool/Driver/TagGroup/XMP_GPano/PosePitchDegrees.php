<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GPano;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PosePitchDegrees extends AbstractTagGroup
{
    protected string $id = 'XMP-GPano:PosePitchDegrees';

    protected string $name = 'PosePitchDegrees';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pose Pitch Degrees',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GPano
             * line : 281258
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::GPano.XMP-GPano:PosePitchDegrees',
            'desc' => [
                'en' => 'Pose Pitch Degrees',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
