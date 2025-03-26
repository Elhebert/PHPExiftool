<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EffectiveMaxAperture extends AbstractTagGroup
{
    protected string $id = 'Nikon:EffectiveMaxAperture';

    protected string $name = 'EffectiveMaxAperture';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Effective Max Aperture',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132536
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:EffectiveMaxAperture',
            'desc' => [
                'en' => 'Effective Max Aperture',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132582
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:EffectiveMaxAperture',
            'desc' => [
                'en' => 'Effective Max Aperture',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132661
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:EffectiveMaxAperture',
            'desc' => [
                'en' => 'Effective Max Aperture',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
