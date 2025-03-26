<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanasonicDateTime extends AbstractTagGroup
{
    protected string $id = 'Panasonic:PanasonicDateTime';

    protected string $name = 'PanasonicDateTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::TimeInfo
             * line : 279655
             * type : undef
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Panasonic::TimeInfo.Panasonic:PanasonicDateTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2052;
}
