<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PerspectiveY extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PerspectiveY';

    protected string $name = 'PerspectiveY';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Perspective Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 287021
             * type : real
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:PerspectiveY',
            'desc' => [
                'en' => 'Perspective Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
