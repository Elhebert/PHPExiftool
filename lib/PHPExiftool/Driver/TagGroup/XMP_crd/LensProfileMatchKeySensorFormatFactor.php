<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensProfileMatchKeySensorFormatFactor extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:LensProfileMatchKeySensorFormatFactor';

    protected string $name = 'LensProfileMatchKeySensorFormatFactor';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Profile Match Key Sensor Format Factor',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283038
             * type : real
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:LensProfileMatchKeySensorFormatFactor',
            'desc' => [
                'en' => 'Lens Profile Match Key Sensor Format Factor',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
