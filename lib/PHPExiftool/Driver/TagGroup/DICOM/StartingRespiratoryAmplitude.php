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
class StartingRespiratoryAmplitude extends AbstractTagGroup
{
    protected string $id = 'DICOM:StartingRespiratoryAmplitude';

    protected string $name = 'StartingRespiratoryAmplitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Starting Respiratory Amplitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 71464
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:StartingRespiratoryAmplitude',
            'desc' => [
                'en' => 'Starting Respiratory Amplitude',
            ],
        ],
    ];

    protected int $count = 0;
}
