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
class TableHorizontalRotationAngle extends AbstractTagGroup
{
    protected string $id = 'DICOM:TableHorizontalRotationAngle';

    protected string $name = 'TableHorizontalRotationAngle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Table Horizontal Rotation Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70606
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:TableHorizontalRotationAngle',
            'desc' => [
                'en' => 'Table Horizontal Rotation Angle',
            ],
        ],
    ];

    protected int $count = 0;
}
