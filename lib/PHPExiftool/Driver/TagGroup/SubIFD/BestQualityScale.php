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
class BestQualityScale extends AbstractTagGroup
{
    protected string $id = 'SubIFD:BestQualityScale';

    protected string $name = 'BestQualityScale';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Best Quality Scale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84369
             * type : rational64u
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD:BestQualityScale',
            'desc' => [
                'en' => 'Best Quality Scale',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
