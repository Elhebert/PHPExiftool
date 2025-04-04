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
class AFSearch extends AbstractTagGroup
{
    protected string $id = 'Olympus:AFSearch';

    protected string $name = 'AFSearch';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Search',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 172994
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:AFSearch',
            'desc' => [
                'en' => 'AF Search',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
