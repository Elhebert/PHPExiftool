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
class ReferencedSpatialRegistrationSeq extends AbstractTagGroup
{
    protected string $id = 'DICOM:ReferencedSpatialRegistrationSeq';

    protected string $name = 'ReferencedSpatialRegistrationSeq';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Referenced Spatial Registration Seq',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 74559
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ReferencedSpatialRegistrationSeq',
            'desc' => [
                'en' => 'Referenced Spatial Registration Seq',
            ],
        ],
    ];

    protected int $count = 0;
}
