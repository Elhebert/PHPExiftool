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
class FocalPlaneXUnknown extends AbstractTagGroup
{
    protected string $id = 'Canon:FocalPlaneXUnknown';

    protected string $name = 'FocalPlaneXUnknown';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Plane X Unknown',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::FocalLength
             * line : 48680
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::FocalLength.Canon:FocalPlaneXUnknown',
            'desc' => [
                'en' => 'Focal Plane X Unknown',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
