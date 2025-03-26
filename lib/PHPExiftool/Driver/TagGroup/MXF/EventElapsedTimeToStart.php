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
class EventElapsedTimeToStart extends AbstractTagGroup
{
    protected string $id = 'MXF:EventElapsedTimeToStart';

    protected string $name = 'EventElapsedTimeToStart';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Event Elapsed Time To Start',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116790
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:EventElapsedTimeToStart',
            'desc' => [
                'en' => 'Event Elapsed Time To Start',
            ],
        ],
    ];

    protected int $count = 0;
}
