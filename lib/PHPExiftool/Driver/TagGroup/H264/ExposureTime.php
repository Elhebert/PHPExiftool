<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'H264:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : H264::MDPM
             * line : 140371
             * type : rational32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.H264:ExposureTime',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : H264::Shutter
             * line : 142072
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::Shutter.H264:ExposureTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
