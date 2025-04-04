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
class FilterThicknessMaximum extends AbstractTagGroup
{
    protected string $id = 'DICOM:FilterThicknessMaximum';

    protected string $name = 'FilterThicknessMaximum';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Filter Thickness Maximum',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69898
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FilterThicknessMaximum',
            'desc' => [
                'en' => 'Filter Thickness Maximum',
            ],
        ],
    ];

    protected int $count = 0;
}
