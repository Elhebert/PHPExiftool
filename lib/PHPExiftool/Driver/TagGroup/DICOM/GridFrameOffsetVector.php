<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GridFrameOffsetVector extends AbstractTagGroup
{
    protected string $id = 'DICOM:GridFrameOffsetVector';

    protected string $name = 'GridFrameOffsetVector';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Grid Frame Offset Vector',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75561
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:GridFrameOffsetVector',
            'desc' => [
                'en' => 'Grid Frame Offset Vector',
            ],
        ],
    ];

    protected int $count = 0;
}
