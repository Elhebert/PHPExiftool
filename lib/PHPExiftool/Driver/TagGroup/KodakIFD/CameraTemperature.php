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
class CameraTemperature extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:CameraTemperature';

    protected string $name = 'CameraTemperature';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106172
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::IFD
             * line : 106175
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
