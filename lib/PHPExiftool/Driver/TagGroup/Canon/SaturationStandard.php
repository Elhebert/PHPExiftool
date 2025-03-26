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
class SaturationStandard extends AbstractTagGroup
{
    protected string $id = 'Canon:SaturationStandard';

    protected string $name = 'SaturationStandard';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation Standard',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26522
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:SaturationStandard',
            'desc' => [
                'en' => 'Saturation Standard',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 50913
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:SaturationStandard',
            'desc' => [
                'en' => 'Saturation Standard',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51574
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:SaturationStandard',
            'desc' => [
                'en' => 'Saturation Standard',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
