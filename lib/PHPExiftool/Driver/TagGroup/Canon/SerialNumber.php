<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'Canon:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Main
             * line : 48912
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::Main
             * line : 48915
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::Main
             * line : 48918
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
