<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SonyMaxAperture extends AbstractTagGroup
{
    protected string $id = 'Sony:SonyMaxAperture';

    protected string $name = 'SonyMaxAperture';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sony Max Aperture',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 265909
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:SonyMaxAperture',
            'desc' => [
                'en' => 'Sony Max Aperture',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268093
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:SonyMaxAperture',
            'desc' => [
                'en' => 'Sony Max Aperture',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
