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
class UTCEventEndDateTime extends AbstractTagGroup
{
    protected string $id = 'MXF:UTCEventEndDateTime';

    protected string $name = 'UTCEventEndDateTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'UTC Event End Date Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115025
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:UTCEventEndDateTime',
            'desc' => [
                'en' => 'UTC Event End Date Time',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117177
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:UTCEventEndDateTime',
            'desc' => [
                'en' => 'UTC Event End Date Time',
            ],
        ],
    ];

    protected int $count = 0;
}
