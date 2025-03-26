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
class SpectroscopyAcquisitionDataColumns extends AbstractTagGroup
{
    protected string $id = 'DICOM:SpectroscopyAcquisitionDataColumns';

    protected string $name = 'SpectroscopyAcquisitionDataColumns';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Spectroscopy Acquisition Data Columns',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70198
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:SpectroscopyAcquisitionDataColumns',
            'desc' => [
                'en' => 'Spectroscopy Acquisition Data Columns',
            ],
        ],
    ];

    protected int $count = 0;
}
