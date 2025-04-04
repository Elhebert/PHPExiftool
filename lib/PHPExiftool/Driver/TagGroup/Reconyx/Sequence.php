<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Sequence extends AbstractTagGroup
{
    protected string $id = 'Reconyx:Sequence';

    protected string $name = 'Sequence';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sequence',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 232636
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:Sequence',
            'desc' => [
                'en' => 'Sequence',
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 232745
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:Sequence',
            'desc' => [
                'en' => 'Sequence',
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 232865
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:Sequence',
            'desc' => [
                'en' => 'Sequence',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
