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
class ColumnOverlap extends AbstractTagGroup
{
    protected string $id = 'DICOM:ColumnOverlap';

    protected string $name = 'ColumnOverlap';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Column Overlap',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72046
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ColumnOverlap',
            'desc' => [
                'en' => 'Column Overlap',
            ],
        ],
    ];

    protected int $count = 0;
}
