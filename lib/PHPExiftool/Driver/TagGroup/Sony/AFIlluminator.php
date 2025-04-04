<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFIlluminator extends AbstractTagGroup
{
    protected string $id = 'Sony:AFIlluminator';

    protected string $name = 'AFIlluminator';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Illuminator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243331
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:AFIlluminator',
            'desc' => [
                'en' => 'AF Illuminator',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Main
             * line : 250498
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFIlluminator',
            'desc' => [
                'en' => 'AF Illuminator',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
