<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeltaType extends AbstractTagGroup
{
    protected string $id = 'MNG:DeltaType';

    protected string $name = 'DeltaType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Delta Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::ClipObjects
             * line : 111901
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::ClipObjects.MNG:DeltaType',
            'desc' => [
                'en' => 'Delta Type',
            ],
        ],
        1 => [
            /**
             * table_name : MNG::DeltaPNGHeader
             * line : 111999
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::DeltaPNGHeader.MNG:DeltaType',
            'desc' => [
                'en' => 'Delta Type',
            ],
        ],
        2 => [
            /**
             * table_name : MNG::FramePriority
             * line : 112048
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::FramePriority.MNG:DeltaType',
            'desc' => [
                'en' => 'Delta Type',
            ],
        ],
        3 => [
            /**
             * table_name : MNG::MoveObjects
             * line : 112326
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::MoveObjects.MNG:DeltaType',
            'desc' => [
                'en' => 'Delta Type',
            ],
        ],
    ];

    protected int $count = 0;
}
