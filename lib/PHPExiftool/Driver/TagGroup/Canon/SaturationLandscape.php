<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SaturationLandscape extends AbstractTagGroup
{
    protected string $id = 'Canon:SaturationLandscape';

    protected string $name = 'SaturationLandscape';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation Landscape',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26528
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:SaturationLandscape',
            'desc' => [
                'en' => 'Saturation Landscape',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51009
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:SaturationLandscape',
            'desc' => [
                'en' => 'Saturation Landscape',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51670
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:SaturationLandscape',
            'desc' => [
                'en' => 'Saturation Landscape',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
