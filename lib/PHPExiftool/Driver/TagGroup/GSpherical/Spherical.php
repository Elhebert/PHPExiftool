<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GSpherical;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Spherical extends AbstractTagGroup
{
    protected string $id = 'GSpherical:Spherical';

    protected string $name = 'Spherical';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GSpherical
             * line : 397238
             * type : boolean
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::GSpherical.GSpherical:Spherical',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
