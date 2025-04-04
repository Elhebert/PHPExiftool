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
class AECExposureIndexAdjStep extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AECExposureIndexAdjStep';

    protected string $name = 'AECExposureIndexAdjStep';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AEC Exposure Index Adj Step',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 212666
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AECExposureIndexAdjStep',
            'desc' => [
                'en' => 'AEC Exposure Index Adj Step',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
