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
class AFPointSelected extends AbstractTagGroup
{
    protected string $id = 'Pentax:AFPointSelected';

    protected string $name = 'AFPointSelected';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point Selected',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 206890
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 207077
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::Main
             * line : 207276
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
