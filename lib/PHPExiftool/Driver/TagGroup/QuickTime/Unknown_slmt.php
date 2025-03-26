<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Unknown_slmt extends AbstractTagGroup
{
    protected string $id = 'QuickTime:Unknown_slmt';

    protected string $name = 'Unknown_slmt';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HTCInfo
             * line : 313544
             * type : int32u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'QuickTime::HTCInfo.QuickTime:Unknown_slmt',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
