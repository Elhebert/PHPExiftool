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
class SCoordOfBottomRightCorner extends AbstractTagGroup
{
    protected string $id = 'DICOM:SCoordOfBottomRightCorner';

    protected string $name = 'SCoordOfBottomRightCorner';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'S Coord Of Bottom Right Corner',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71902
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SCoordOfBottomRightCorner',
            'desc' => [
                'en' => 'S Coord Of Bottom Right Corner',
            ],
        ],
    ];

    protected int $count = 0;
}
