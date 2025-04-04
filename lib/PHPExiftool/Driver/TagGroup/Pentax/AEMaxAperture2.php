<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AEMaxAperture2 extends AbstractTagGroup
{
    protected string $id = 'Pentax:AEMaxAperture2';

    protected string $name = 'AEMaxAperture2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Max Aperture 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AEInfo
             * line : 196397
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo.Pentax:AEMaxAperture2',
            'desc' => [
                'en' => 'AE Max Aperture 2',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AEInfo2
             * line : 196571
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo2.Pentax:AEMaxAperture2',
            'desc' => [
                'en' => 'AE Max Aperture 2',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::AEInfo3
             * line : 196596
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo3.Pentax:AEMaxAperture2',
            'desc' => [
                'en' => 'AE Max Aperture 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
