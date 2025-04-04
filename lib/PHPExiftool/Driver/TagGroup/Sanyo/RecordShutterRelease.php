<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecordShutterRelease extends AbstractTagGroup
{
    protected string $id = 'Sanyo:RecordShutterRelease';

    protected string $name = 'RecordShutterRelease';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Record Shutter Release',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::Main
             * line : 235825
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sanyo::Main.Sanyo:RecordShutterRelease',
            'desc' => [
                'en' => 'Record Shutter Release',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
