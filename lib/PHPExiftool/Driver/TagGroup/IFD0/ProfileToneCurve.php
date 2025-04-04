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
class ProfileToneCurve extends AbstractTagGroup
{
    protected string $id = 'IFD0:ProfileToneCurve';

    protected string $name = 'ProfileToneCurve';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Profile Tone Curve',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84438
             * type : float
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:ProfileToneCurve',
            'desc' => [
                'en' => 'Profile Tone Curve',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
