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
class BaselineNoise extends AbstractTagGroup
{
    protected string $id = 'IFD0:BaselineNoise';

    protected string $name = 'BaselineNoise';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Baseline Noise',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84180
             * type : rational64u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:BaselineNoise',
            'desc' => [
                'en' => 'Baseline Noise',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
