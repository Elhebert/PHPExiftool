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
class CTAcquisitionTypeSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:CTAcquisitionTypeSequence';

    protected string $name = 'CTAcquisitionTypeSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'CT Acquisition Type Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70342
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:CTAcquisitionTypeSequence',
            'desc' => [
                'en' => 'CT Acquisition Type Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
