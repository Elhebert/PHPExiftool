<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PictureInfo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'PictureInfo:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : APP12::PictureInfo
             * line : 283
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'APP12::PictureInfo.PictureInfo:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : APP12::PictureInfo
             * line : 307
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'APP12::PictureInfo.PictureInfo:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;
}
