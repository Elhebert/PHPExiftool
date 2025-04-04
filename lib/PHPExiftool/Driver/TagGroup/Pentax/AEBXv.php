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
class AEBXv extends AbstractTagGroup
{
    protected string $id = 'Pentax:AEBXv';

    protected string $name = 'AEBXv';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AEB Xv',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AEInfo
             * line : 196276
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo.Pentax:AEBXv',
            'desc' => [
                'en' => 'AEB Xv',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AEInfo2
             * line : 196485
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo2.Pentax:AEBXv',
            'desc' => [
                'en' => 'AEB Xv',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
