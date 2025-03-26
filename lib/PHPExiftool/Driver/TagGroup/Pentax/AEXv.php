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
class AEXv extends AbstractTagGroup
{
    protected string $id = 'Pentax:AEXv';

    protected string $name = 'AEXv';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AE Xv',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AEInfo
             * line : 196273
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo.Pentax:AEXv',
            'desc' => [
                'en' => 'AE Xv',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AEInfo2
             * line : 196482
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AEInfo2.Pentax:AEXv',
            'desc' => [
                'en' => 'AE Xv',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
