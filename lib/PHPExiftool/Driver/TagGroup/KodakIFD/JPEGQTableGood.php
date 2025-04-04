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
class JPEGQTableGood extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:JPEGQTableGood';

    protected string $name = 'JPEGQTableGood';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'JPEGQ Table Good',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107135
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:JPEGQTableGood',
            'desc' => [
                'en' => 'JPEGQ Table Good',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
