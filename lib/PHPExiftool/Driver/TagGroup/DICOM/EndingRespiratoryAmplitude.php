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
class EndingRespiratoryAmplitude extends AbstractTagGroup
{
    protected string $id = 'DICOM:EndingRespiratoryAmplitude';

    protected string $name = 'EndingRespiratoryAmplitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Ending Respiratory Amplitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71470
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:EndingRespiratoryAmplitude',
            'desc' => [
                'en' => 'Ending Respiratory Amplitude',
            ],
        ],
    ];

    protected int $count = 0;
}
