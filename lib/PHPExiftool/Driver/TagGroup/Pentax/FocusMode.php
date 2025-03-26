<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusMode extends AbstractTagGroup
{
    protected string $id = 'Pentax:FocusMode';

    protected string $name = 'FocusMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 206823
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 206873
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::Type2
             * line : 210541
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Type2.Pentax:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
