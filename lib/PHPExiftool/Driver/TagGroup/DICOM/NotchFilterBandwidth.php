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
class NotchFilterBandwidth extends AbstractTagGroup
{
    protected string $id = 'DICOM:NotchFilterBandwidth';

    protected string $name = 'NotchFilterBandwidth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Notch Filter Bandwidth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72747
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:NotchFilterBandwidth',
            'desc' => [
                'en' => 'Notch Filter Bandwidth',
            ],
        ],
    ];

    protected int $count = 0;
}
