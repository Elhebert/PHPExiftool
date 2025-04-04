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
class DeliveredPulseRepetitionInterval extends AbstractTagGroup
{
    protected string $id = 'DICOM:DeliveredPulseRepetitionInterval';

    protected string $name = 'DeliveredPulseRepetitionInterval';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Delivered Pulse Repetition Interval',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 75975
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DeliveredPulseRepetitionInterval',
            'desc' => [
                'en' => 'Delivered Pulse Repetition Interval',
            ],
        ],
    ];

    protected int $count = 0;
}
