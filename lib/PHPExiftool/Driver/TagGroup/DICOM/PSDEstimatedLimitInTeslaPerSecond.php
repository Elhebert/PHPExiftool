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
class PSDEstimatedLimitInTeslaPerSecond extends AbstractTagGroup
{
    protected string $id = 'DICOM:PSDEstimatedLimitInTeslaPerSecond';

    protected string $name = 'PSDEstimatedLimitInTeslaPerSecond';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'PSD Estimated Limit In Tesla Per Second',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73500
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:PSDEstimatedLimitInTeslaPerSecond',
            'desc' => [
                'en' => 'PSD Estimated Limit In Tesla Per Second',
            ],
        ],
    ];

    protected int $count = 0;
}
