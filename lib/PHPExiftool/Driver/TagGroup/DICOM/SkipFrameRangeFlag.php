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
class SkipFrameRangeFlag extends AbstractTagGroup
{
    protected string $id = 'DICOM:SkipFrameRangeFlag';

    protected string $name = 'SkipFrameRangeFlag';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Skip Frame Range Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 68626
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SkipFrameRangeFlag',
            'desc' => [
                'en' => 'Skip Frame Range Flag',
            ],
        ],
    ];

    protected int $count = 0;
}
