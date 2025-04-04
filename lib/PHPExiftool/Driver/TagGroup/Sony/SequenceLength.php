<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SequenceLength extends AbstractTagGroup
{
    protected string $id = 'Sony:SequenceLength';

    protected string $name = 'SequenceLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sequence Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 270785
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:SequenceLength',
            'desc' => [
                'en' => 'Sequence Length',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 270958
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:SequenceLength',
            'desc' => [
                'en' => 'Sequence Length',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271117
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:SequenceLength',
            'desc' => [
                'en' => 'Sequence Length',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271167
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:SequenceLength',
            'desc' => [
                'en' => 'Sequence Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
