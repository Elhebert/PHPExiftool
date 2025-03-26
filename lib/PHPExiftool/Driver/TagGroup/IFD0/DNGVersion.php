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
class DNGVersion extends AbstractTagGroup
{
    protected string $id = 'IFD0:DNGVersion';

    protected string $name = 'DNGVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'DNG Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84076
             * type : int8u
             * writable : true
             * count : 4
             * flags : unsafe
             */
            'id' => 'Exif::Main.IFD0:DNGVersion',
            'desc' => [
                'en' => 'DNG Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2064;
}
