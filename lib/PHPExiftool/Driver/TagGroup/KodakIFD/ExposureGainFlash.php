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
class ExposureGainFlash extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ExposureGainFlash';

    protected string $name = 'ExposureGainFlash';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Gain Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106493
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ExposureGainFlash',
            'desc' => [
                'en' => 'Exposure Gain Flash',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
