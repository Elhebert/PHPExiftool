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
class NumberOfPhaseEncodingSteps extends AbstractTagGroup
{
    protected string $id = 'DICOM:NumberOfPhaseEncodingSteps';

    protected string $name = 'NumberOfPhaseEncodingSteps';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Number Of Phase Encoding Steps',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69001
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NumberOfPhaseEncodingSteps',
            'desc' => [
                'en' => 'Number Of Phase Encoding Steps',
            ],
        ],
    ];

    protected int $count = 0;
}
