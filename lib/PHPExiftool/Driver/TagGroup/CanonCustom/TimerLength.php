<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimerLength extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:TimerLength';

    protected string $name = 'TimerLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 75454
             * type : int32s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:TimerLength',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 75460
             * type : int32s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:TimerLength',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
