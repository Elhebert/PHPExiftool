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
class LimitsInUnitsOfPercent extends AbstractTagGroup
{
    protected string $id = 'DICOM:LimitsInUnitsOfPercent';

    protected string $name = 'LimitsInUnitsOfPercent';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Limits In Units Of Percent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73494
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:LimitsInUnitsOfPercent',
            'desc' => [
                'en' => 'Limits In Units Of Percent',
            ],
        ],
    ];

    protected int $count = 0;
}
