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
class SharpnessNeutral extends AbstractTagGroup
{
    protected string $id = 'Canon:SharpnessNeutral';

    protected string $name = 'SharpnessNeutral';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sharpness Neutral',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26504
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:SharpnessNeutral',
            'desc' => [
                'en' => 'Sharpness Neutral',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51049
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:SharpnessNeutral',
            'desc' => [
                'en' => 'Sharpness Neutral',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51710
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:SharpnessNeutral',
            'desc' => [
                'en' => 'Sharpness Neutral',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
