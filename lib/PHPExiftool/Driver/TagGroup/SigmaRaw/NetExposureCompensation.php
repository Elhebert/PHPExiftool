<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NetExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:NetExposureCompensation';

    protected string $name = 'NetExposureCompensation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Net Exposure Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Properties
             * line : 237681
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Properties.SigmaRaw:NetExposureCompensation',
            'desc' => [
                'en' => 'Net Exposure Compensation',
            ],
        ],
    ];

    protected int $count = 0;
}
