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
class MinAperture extends AbstractTagGroup
{
    protected string $id = 'Pentax:MinAperture';

    protected string $name = 'MinAperture';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Min Aperture',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::LensData
             * line : 200190
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::LensData.Pentax:MinAperture',
            'desc' => [
                'en' => 'Min Aperture',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
