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
class MRSpectroscopyAcquisitionType extends AbstractTagGroup
{
    protected string $id = 'DICOM:MRSpectroscopyAcquisitionType';

    protected string $name = 'MRSpectroscopyAcquisitionType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MR Spectroscopy Acquisition Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70291
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:MRSpectroscopyAcquisitionType',
            'desc' => [
                'en' => 'MR Spectroscopy Acquisition Type',
            ],
        ],
    ];

    protected int $count = 0;
}
