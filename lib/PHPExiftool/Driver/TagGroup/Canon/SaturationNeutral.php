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
class SaturationNeutral extends AbstractTagGroup
{
    protected string $id = 'Canon:SaturationNeutral';

    protected string $name = 'SaturationNeutral';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation Neutral',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26531
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:SaturationNeutral',
            'desc' => [
                'en' => 'Saturation Neutral',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51057
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:SaturationNeutral',
            'desc' => [
                'en' => 'Saturation Neutral',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51718
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:SaturationNeutral',
            'desc' => [
                'en' => 'Saturation Neutral',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
