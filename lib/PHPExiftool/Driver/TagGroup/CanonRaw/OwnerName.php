<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OwnerName extends AbstractTagGroup
{
    protected string $id = 'CanonRaw:OwnerName';

    protected string $name = 'OwnerName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Owner Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonRaw::Main
             * line : 57254
             * type : string
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'CanonRaw::Main.CanonRaw:OwnerName',
            'desc' => [
                'en' => 'Owner Name',
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2052;
}
