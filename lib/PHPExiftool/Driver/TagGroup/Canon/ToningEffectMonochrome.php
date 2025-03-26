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
class ToningEffectMonochrome extends AbstractTagGroup
{
    protected string $id = 'Canon:ToningEffectMonochrome';

    protected string $name = 'ToningEffectMonochrome';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Toning Effect Monochrome',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26584
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ToningEffectMonochrome',
            'desc' => [
                'en' => 'Toning Effect Monochrome',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51192
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:ToningEffectMonochrome',
            'desc' => [
                'en' => 'Toning Effect Monochrome',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51853
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:ToningEffectMonochrome',
            'desc' => [
                'en' => 'Toning Effect Monochrome',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
