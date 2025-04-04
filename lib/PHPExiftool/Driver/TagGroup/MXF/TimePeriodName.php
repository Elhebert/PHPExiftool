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
class TimePeriodName extends AbstractTagGroup
{
    protected string $id = 'MXF:TimePeriodName';

    protected string $name = 'TimePeriodName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Time Period Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115061
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TimePeriodName',
            'desc' => [
                'en' => 'Time Period Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117186
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TimePeriodName',
            'desc' => [
                'en' => 'Time Period Name',
            ],
        ],
    ];

    protected int $count = 0;
}
