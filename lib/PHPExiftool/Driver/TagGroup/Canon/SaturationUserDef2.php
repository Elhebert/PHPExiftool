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
class SaturationUserDef2 extends AbstractTagGroup
{
    protected string $id = 'Canon:SaturationUserDef2';

    protected string $name = 'SaturationUserDef2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation User Def 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26563
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:SaturationUserDef2',
            'desc' => [
                'en' => 'Saturation User Def 2',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51309
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:SaturationUserDef2',
            'desc' => [
                'en' => 'Saturation User Def 2',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 52048
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:SaturationUserDef2',
            'desc' => [
                'en' => 'Saturation User Def 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
