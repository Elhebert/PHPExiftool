<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraID extends AbstractTagGroup
{
    protected string $id = 'Olympus:CameraID';

    protected string $name = 'CameraID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 178328
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:CameraID',
            'desc' => [
                'en' => 'Camera ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
