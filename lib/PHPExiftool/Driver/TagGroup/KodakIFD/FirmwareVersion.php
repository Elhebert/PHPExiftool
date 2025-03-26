<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:FirmwareVersion';

    protected string $name = 'FirmwareVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106220
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::IFD
             * line : 107393
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
