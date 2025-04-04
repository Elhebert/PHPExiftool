<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SpecialMode extends AbstractTagGroup
{
    protected string $id = 'Sanyo:SpecialMode';

    protected string $name = 'SpecialMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Special Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::Main
             * line : 235644
             * type : int32u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sanyo::Main.Sanyo:SpecialMode',
            'desc' => [
                'en' => 'Special Mode',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
