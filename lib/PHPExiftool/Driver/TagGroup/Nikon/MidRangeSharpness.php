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
class MidRangeSharpness extends AbstractTagGroup
{
    protected string $id = 'Nikon:MidRangeSharpness';

    protected string $name = 'MidRangeSharpness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mid Range Sharpness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::PictureControl3
             * line : 137585
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl3.Nikon:MidRangeSharpness',
            'desc' => [
                'en' => 'Mid Range Sharpness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
