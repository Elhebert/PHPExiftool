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
class AECOutdoorBrightDiscarded extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AECOutdoorBrightDiscarded';

    protected string $name = 'AECOutdoorBrightDiscarded';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AEC Outdoor Bright Discarded',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 212690
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AECOutdoorBrightDiscarded',
            'desc' => [
                'en' => 'AEC Outdoor Bright Discarded',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
