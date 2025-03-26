<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'HP:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HP::TDHD
             * line : 98390
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'HP::TDHD.HP:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : HP::Type2
             * line : 98406
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'HP::Type2.HP:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        2 => [
            /**
             * table_name : HP::Type4
             * line : 98425
             * type : string
             * writable : false
             * count : 26
             * flags : permanent
             */
            'id' => 'HP::Type4.HP:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        3 => [
            /**
             * table_name : HP::Type6
             * line : 98444
             * type : string
             * writable : false
             * count : 26
             * flags : permanent
             */
            'id' => 'HP::Type6.HP:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
    ];

    protected int $count = 26;

    protected int $flags = 4;
}
