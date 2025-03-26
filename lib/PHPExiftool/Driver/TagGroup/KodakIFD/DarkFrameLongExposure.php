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
class DarkFrameLongExposure extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:DarkFrameLongExposure';

    protected string $name = 'DarkFrameLongExposure';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Dark Frame Long Exposure',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107351
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:DarkFrameLongExposure',
            'desc' => [
                'en' => 'Dark Frame Long Exposure',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
