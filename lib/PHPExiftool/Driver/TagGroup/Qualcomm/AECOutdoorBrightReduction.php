<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AECOutdoorBrightReduction extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AECOutdoorBrightReduction';

    protected string $name = 'AECOutdoorBrightReduction';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AEC Outdoor Bright Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 212696
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AECOutdoorBrightReduction',
            'desc' => [
                'en' => 'AEC Outdoor Bright Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
