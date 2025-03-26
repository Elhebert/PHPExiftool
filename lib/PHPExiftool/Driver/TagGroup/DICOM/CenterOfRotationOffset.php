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
class CenterOfRotationOffset extends AbstractTagGroup
{
    protected string $id = 'DICOM:CenterOfRotationOffset';

    protected string $name = 'CenterOfRotationOffset';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Center Of Rotation Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69274
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CenterOfRotationOffset',
            'desc' => [
                'en' => 'Center Of Rotation Offset',
            ],
        ],
    ];

    protected int $count = 0;
}
