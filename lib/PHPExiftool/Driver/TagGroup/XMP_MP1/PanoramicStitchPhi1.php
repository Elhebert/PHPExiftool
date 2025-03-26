<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanoramicStitchPhi1 extends AbstractTagGroup
{
    protected string $id = 'XMP-MP1:PanoramicStitchPhi1';

    protected string $name = 'PanoramicStitchPhi1';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Panoramic Stitch Phi 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::MP1
             * line : 119983
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Microsoft::MP1.XMP-MP1:PanoramicStitchPhi1',
            'desc' => [
                'en' => 'Panoramic Stitch Phi 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
