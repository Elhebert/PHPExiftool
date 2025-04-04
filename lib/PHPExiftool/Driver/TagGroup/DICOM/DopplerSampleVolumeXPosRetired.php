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
class DopplerSampleVolumeXPosRetired extends AbstractTagGroup
{
    protected string $id = 'DICOM:DopplerSampleVolumeXPosRetired';

    protected string $name = 'DopplerSampleVolumeXPosRetired';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Doppler Sample Volume X Pos Retired',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69721
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:DopplerSampleVolumeXPosRetired',
            'desc' => [
                'en' => 'Doppler Sample Volume X Pos Retired',
            ],
        ],
    ];

    protected int $count = 0;
}
