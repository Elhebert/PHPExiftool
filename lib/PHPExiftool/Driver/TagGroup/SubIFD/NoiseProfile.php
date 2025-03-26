<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseProfile extends AbstractTagGroup
{
    protected string $id = 'SubIFD:NoiseProfile';

    protected string $name = 'NoiseProfile';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 120499
             * type : double
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:NoiseProfile',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
