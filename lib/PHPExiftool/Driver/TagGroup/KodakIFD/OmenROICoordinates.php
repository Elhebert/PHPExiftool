<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OmenROICoordinates extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:OmenROICoordinates';

    protected string $name = 'OmenROICoordinates';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Omen ROI Coordinates',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106922
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:OmenROICoordinates',
            'desc' => [
                'en' => 'Omen ROI Coordinates',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
