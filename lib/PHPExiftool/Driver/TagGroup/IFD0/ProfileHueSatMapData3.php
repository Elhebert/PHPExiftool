<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileHueSatMapData3 extends AbstractTagGroup
{
    protected string $id = 'IFD0:ProfileHueSatMapData3';

    protected string $name = 'ProfileHueSatMapData3';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Profile Hue Sat Map Data 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84885
             * type : float
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:ProfileHueSatMapData3',
            'desc' => [
                'en' => 'Profile Hue Sat Map Data 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
