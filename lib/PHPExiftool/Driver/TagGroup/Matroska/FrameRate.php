<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameRate extends AbstractTagGroup
{
    protected string $id = 'Matroska:FrameRate';

    protected string $name = 'FrameRate';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Frame Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119818
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:FrameRate',
            'desc' => [
                'en' => 'Frame Rate',
            ],
        ],
    ];

    protected int $count = 0;
}
