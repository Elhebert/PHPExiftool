<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamMimeLen extends AbstractTagGroup
{
    protected string $id = 'Real-MDPR:StreamMimeLen';

    protected string $name = 'StreamMimeLen';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::MediaProps
             * line : 330409
             * type : int8u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::MediaProps.Real-MDPR:StreamMimeLen',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
