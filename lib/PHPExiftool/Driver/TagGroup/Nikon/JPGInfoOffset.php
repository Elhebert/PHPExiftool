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
class JPGInfoOffset extends AbstractTagGroup
{
    protected string $id = 'Nikon:JPGInfoOffset';

    protected string $name = 'JPGInfoOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'JPG Info Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139296
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:JPGInfoOffset',
            'desc' => [
                'en' => 'JPG Info Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
