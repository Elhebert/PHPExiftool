<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownNumber extends AbstractTagGroup
{
    protected string $id = 'Kodak:UnknownNumber';

    protected string $name = 'UnknownNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Type9
             * line : 160652
             * type : string
             * writable : true
             * count : 12
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:UnknownNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Type9
             * line : 160655
             * type : string
             * writable : true
             * count : 12
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:UnknownNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 12;

    protected int $flags = 2052;
}
