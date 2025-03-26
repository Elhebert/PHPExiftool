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
class ExposureInMilliAmpSec extends AbstractTagGroup
{
    protected string $id = 'DICOM:ExposureInMilliAmpSec';

    protected string $name = 'ExposureInMilliAmpSec';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Exposure In Milli Amp Sec',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 70432
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:ExposureInMilliAmpSec',
            'desc' => [
                'en' => 'Exposure In Milli Amp Sec',
            ],
        ],
    ];

    protected int $count = 0;
}
