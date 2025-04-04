<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamPositionIndicator extends AbstractTagGroup
{
    protected string $id = 'MXF:StreamPositionIndicator';

    protected string $name = 'StreamPositionIndicator';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Stream Position Indicator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116058
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StreamPositionIndicator',
            'desc' => [
                'en' => 'Stream Position Indicator',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117093
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StreamPositionIndicator',
            'desc' => [
                'en' => 'Stream Position Indicator',
            ],
        ],
        2 => [
            /**
             * table_name : MXF::Main
             * line : 117096
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StreamPositionIndicator',
            'desc' => [
                'en' => 'Stream Position Indicator',
            ],
        ],
        3 => [
            /**
             * table_name : MXF::Main
             * line : 117099
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StreamPositionIndicator',
            'desc' => [
                'en' => 'Stream Position Indicator',
            ],
        ],
    ];

    protected int $count = 0;
}
