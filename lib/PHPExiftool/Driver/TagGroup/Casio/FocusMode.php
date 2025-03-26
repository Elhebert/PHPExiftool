<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocusMode extends AbstractTagGroup
{
    protected string $id = 'Casio:FocusMode';

    protected string $name = 'FocusMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61631
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62043
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Casio::Type2
             * line : 62290
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
