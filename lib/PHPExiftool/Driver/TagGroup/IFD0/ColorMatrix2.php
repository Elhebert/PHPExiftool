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
class ColorMatrix2 extends AbstractTagGroup
{
    protected string $id = 'IFD0:ColorMatrix2';

    protected string $name = 'ColorMatrix2';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Matrix 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84153
             * type : rational64s
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:ColorMatrix2',
            'desc' => [
                'en' => 'Color Matrix 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
