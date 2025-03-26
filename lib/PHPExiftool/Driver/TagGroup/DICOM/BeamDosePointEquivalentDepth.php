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
class BeamDosePointEquivalentDepth extends AbstractTagGroup
{
    protected string $id = 'DICOM:BeamDosePointEquivalentDepth';

    protected string $name = 'BeamDosePointEquivalentDepth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Beam Dose Point Equivalent Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 76206
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:BeamDosePointEquivalentDepth',
            'desc' => [
                'en' => 'Beam Dose Point Equivalent Depth',
            ],
        ],
    ];

    protected int $count = 0;
}
