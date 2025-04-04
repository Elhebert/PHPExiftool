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
class ZOffsetInSlideCoordinateSystem extends AbstractTagGroup
{
    protected string $id = 'DICOM:ZOffsetInSlideCoordinateSystem';

    protected string $name = 'ZOffsetInSlideCoordinateSystem';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Z Offset In Slide Coordinate System',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73026
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ZOffsetInSlideCoordinateSystem',
            'desc' => [
                'en' => 'Z Offset In Slide Coordinate System',
            ],
        ],
    ];

    protected int $count = 0;
}
