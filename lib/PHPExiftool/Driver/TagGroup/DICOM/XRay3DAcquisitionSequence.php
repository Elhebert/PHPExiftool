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
class XRay3DAcquisitionSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:XRay3DAcquisitionSequence';

    protected string $name = 'XRay3DAcquisitionSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'X Ray 3D Acquisition Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70636
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:XRay3DAcquisitionSequence',
            'desc' => [
                'en' => 'X Ray 3D Acquisition Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
