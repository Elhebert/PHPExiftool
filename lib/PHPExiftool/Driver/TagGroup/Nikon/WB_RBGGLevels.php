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
class WB_RBGGLevels extends AbstractTagGroup
{
    protected string $id = 'Nikon:WB_RBGGLevels';

    protected string $name = 'WB_RBGGLevels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RBGG Levels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ColorBalance1
             * line : 130091
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::ColorBalance1.Nikon:WB_RBGGLevels',
            'desc' => [
                'en' => 'WB RBGG Levels',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2068;
}
