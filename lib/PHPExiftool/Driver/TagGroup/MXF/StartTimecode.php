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
class StartTimecode extends AbstractTagGroup
{
    protected string $id = 'MXF:StartTimecode';

    protected string $name = 'StartTimecode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Start Timecode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116067
             * type : int64s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StartTimecode',
            'desc' => [
                'en' => 'Start Timecode',
            ],
        ],
    ];

    protected int $count = 0;
}
