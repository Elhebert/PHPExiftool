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
class RadiopharmaceuticalStartDateTime extends AbstractTagGroup
{
    protected string $id = 'DICOM:RadiopharmaceuticalStartDateTime';

    protected string $name = 'RadiopharmaceuticalStartDateTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Radiopharmaceutical Start Date Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 69181
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:RadiopharmaceuticalStartDateTime',
            'desc' => [
                'en' => 'Radiopharmaceutical Start Date Time',
            ],
        ],
    ];

    protected int $count = 0;
}
