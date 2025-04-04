<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StandardOutputSensitivity extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:StandardOutputSensitivity';

    protected string $name = 'StandardOutputSensitivity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Standard Output Sensitivity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82630
             * type : int32u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:StandardOutputSensitivity',
            'desc' => [
                'en' => 'Standard Output Sensitivity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
