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
class TDA4Offset extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:TDA4Offset';

    protected string $name = 'TDA4Offset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'TDA4 Offset',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108569
             * type : int32u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:TDA4Offset',
            'desc' => [
                'en' => 'TDA4 Offset',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
