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
class SpecificAbsorptionRateSequence extends AbstractTagGroup
{
    protected string $id = 'DICOM:SpecificAbsorptionRateSequence';

    protected string $name = 'SpecificAbsorptionRateSequence';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Specific Absorption Rate Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70327
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SpecificAbsorptionRateSequence',
            'desc' => [
                'en' => 'Specific Absorption Rate Sequence',
            ],
        ],
    ];

    protected int $count = 0;
}
