<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Duration extends AbstractTagGroup
{
    protected string $id = 'Composite:Duration';

    protected string $name = 'Duration';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 65057
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        1 => [
            /**
             * table_name : Composite
             * line : 65060
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        2 => [
            /**
             * table_name : Composite
             * line : 65221
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        3 => [
            /**
             * table_name : Composite
             * line : 65272
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        4 => [
            /**
             * table_name : Composite
             * line : 67857
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        5 => [
            /**
             * table_name : Composite
             * line : 67860
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        6 => [
            /**
             * table_name : Composite
             * line : 67919
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
    ];

    protected int $count = 0;
}
