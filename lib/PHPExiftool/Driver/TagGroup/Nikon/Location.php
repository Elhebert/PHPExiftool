<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Location extends AbstractTagGroup
{
    protected string $id = 'Nikon:Location';

    protected string $name = 'Location';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LocationInfo
             * line : 196293
             * type : undef
             * writable : true
             * count : 70
             * flags : permanent
             */
            'id' => 'Nikon::LocationInfo.Nikon:Location',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 70;

    protected int $flags = 2052;
}
