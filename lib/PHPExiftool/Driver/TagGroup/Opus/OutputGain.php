<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Opus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OutputGain extends AbstractTagGroup
{
    protected string $id = 'Opus:OutputGain';

    protected string $name = 'OutputGain';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Opus::Header
             * line : 263751
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Opus::Header.Opus:OutputGain',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
