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
class YOffsetInSlideCoordinateSystem extends AbstractTagGroup
{
    protected string $id = 'DICOM:YOffsetInSlideCoordinateSystem';

    protected string $name = 'YOffsetInSlideCoordinateSystem';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Y Offset In Slide Coordinate System',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73023
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:YOffsetInSlideCoordinateSystem',
            'desc' => [
                'en' => 'Y Offset In Slide Coordinate System',
            ],
        ],
    ];

    protected int $count = 0;
}
