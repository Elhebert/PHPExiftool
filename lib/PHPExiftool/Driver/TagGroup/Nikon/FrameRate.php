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
class FrameRate extends AbstractTagGroup
{
    protected string $id = 'Nikon:FrameRate';

    protected string $name = 'FrameRate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Frame Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::NCTG
             * line : 136923
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:FrameRate',
            'desc' => [
                'en' => 'Frame Rate',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
