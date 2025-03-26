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
class FilterEffectMonochrome extends AbstractTagGroup
{
    protected string $id = 'Canon:FilterEffectMonochrome';

    protected string $name = 'FilterEffectMonochrome';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Filter Effect Monochrome',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26537
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FilterEffectMonochrome',
            'desc' => [
                'en' => 'Filter Effect Monochrome',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51169
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:FilterEffectMonochrome',
            'desc' => [
                'en' => 'Filter Effect Monochrome',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 51830
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:FilterEffectMonochrome',
            'desc' => [
                'en' => 'Filter Effect Monochrome',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
