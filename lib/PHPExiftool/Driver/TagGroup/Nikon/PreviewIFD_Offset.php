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
class PreviewIFD_Offset extends AbstractTagGroup
{
    protected string $id = 'Nikon:PreviewIFD_Offset';

    protected string $name = 'PreviewIFD_Offset';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preview IFD Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::CaptureOffsets
             * line : 130068
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::CaptureOffsets.Nikon:PreviewIFD_Offset',
            'desc' => [
                'en' => 'Preview IFD Offset',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
