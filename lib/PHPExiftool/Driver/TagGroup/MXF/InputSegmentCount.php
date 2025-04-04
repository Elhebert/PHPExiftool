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
class InputSegmentCount extends AbstractTagGroup
{
    protected string $id = 'MXF:InputSegmentCount';

    protected string $name = 'InputSegmentCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Input Segment Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114710
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:InputSegmentCount',
            'desc' => [
                'en' => 'Input Segment Count',
            ],
        ],
    ];

    protected int $count = 0;
}
