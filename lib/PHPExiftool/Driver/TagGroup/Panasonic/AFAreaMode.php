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
class AFAreaMode extends AbstractTagGroup
{
    protected string $id = 'Panasonic:AFAreaMode';

    protected string $name = 'AFAreaMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 191822
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Main
             * line : 191833
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
