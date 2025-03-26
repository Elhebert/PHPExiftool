<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CodingHistory extends AbstractTagGroup
{
    protected string $id = 'RIFF:CodingHistory';

    protected string $name = 'CodingHistory';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::BroadcastExt
             * line : 327808
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::BroadcastExt.RIFF:CodingHistory',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
