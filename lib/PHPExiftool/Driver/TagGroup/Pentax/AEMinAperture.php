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
class AEMinAperture extends AbstractTagGroup
{
    protected string $id = 'Pentax:AEMinAperture';

    protected string $name = 'AEMinAperture';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Min Aperture',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AEInfo
             * line : 196400
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo.Pentax:AEMinAperture',
            'desc' => [
                'en' => 'AE Min Aperture',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AEInfo2
             * line : 196574
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo2.Pentax:AEMinAperture',
            'desc' => [
                'en' => 'AE Min Aperture',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::AEInfo3
             * line : 196599
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo3.Pentax:AEMinAperture',
            'desc' => [
                'en' => 'AE Min Aperture',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
