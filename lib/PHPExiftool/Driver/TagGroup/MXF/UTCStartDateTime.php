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
class UTCStartDateTime extends AbstractTagGroup
{
    protected string $id = 'MXF:UTCStartDateTime';

    protected string $name = 'UTCStartDateTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'UTC Start Date Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114989
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:UTCStartDateTime',
            'desc' => [
                'en' => 'UTC Start Date Time',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 118327
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:UTCStartDateTime',
            'desc' => [
                'en' => 'UTC Start Date Time',
            ],
        ],
    ];

    protected int $count = 0;
}
