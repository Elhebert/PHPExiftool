<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameRgn extends AbstractTagGroup
{
    protected string $id = 'PICT:FrameRgn';

    protected string $name = 'FrameRgn';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Frame Rgn',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183173
             * type : Rgn
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:FrameRgn',
            'desc' => [
                'en' => 'Frame Rgn',
            ],
        ],
    ];

    protected int $count = 0;
}
