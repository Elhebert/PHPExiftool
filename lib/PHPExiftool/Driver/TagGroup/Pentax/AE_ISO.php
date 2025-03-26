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
class AE_ISO extends AbstractTagGroup
{
    protected string $id = 'Pentax:AE_ISO';

    protected string $name = 'AE_ISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AEInfo
             * line : 196270
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo.Pentax:AE_ISO',
            'desc' => [
                'en' => 'AE ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AEInfo2
             * line : 196479
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo2.Pentax:AE_ISO',
            'desc' => [
                'en' => 'AE ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::AEInfo3
             * line : 196590
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo3.Pentax:AE_ISO',
            'desc' => [
                'en' => 'AE ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
