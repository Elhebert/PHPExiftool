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
class TimeReference extends AbstractTagGroup
{
    protected string $id = 'RIFF:TimeReference';

    protected string $name = 'TimeReference';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::BroadcastExt
             * line : 327799
             * type : int32u
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'RIFF::BroadcastExt.RIFF:TimeReference',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;
}
