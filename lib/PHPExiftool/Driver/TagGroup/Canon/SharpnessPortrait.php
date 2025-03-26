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
class SharpnessPortrait extends AbstractTagGroup
{
    protected string $id = 'Canon:SharpnessPortrait';

    protected string $name = 'SharpnessPortrait';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sharpness Portrait',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26498
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:SharpnessPortrait',
            'desc' => [
                'en' => 'Sharpness Portrait',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 50953
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:SharpnessPortrait',
            'desc' => [
                'en' => 'Sharpness Portrait',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51614
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:SharpnessPortrait',
            'desc' => [
                'en' => 'Sharpness Portrait',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
