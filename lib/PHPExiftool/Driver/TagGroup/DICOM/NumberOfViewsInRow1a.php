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
class NumberOfViewsInRow1a extends AbstractTagGroup
{
    protected string $id = 'DICOM:NumberOfViewsInRow1a';

    protected string $name = 'NumberOfViewsInRow1a';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Number Of Views In Row 1a',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73779
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NumberOfViewsInRow1a',
            'desc' => [
                'en' => 'Number Of Views In Row 1a',
            ],
        ],
    ];

    protected int $count = 0;
}
