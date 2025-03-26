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
class InternalSerialNumber extends AbstractTagGroup
{
    protected string $id = 'Canon:InternalSerialNumber';

    protected string $name = 'InternalSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Internal Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Main
             * line : 50053
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::SerialInfo
             * line : 52632
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::SerialInfo.Canon:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
