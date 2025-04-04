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
class FlashActionExternal extends AbstractTagGroup
{
    protected string $id = 'Sony:FlashActionExternal';

    protected string $name = 'FlashActionExternal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Action External',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251625
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashActionExternal',
            'desc' => [
                'en' => 'Flash Action External',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251639
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashActionExternal',
            'desc' => [
                'en' => 'Flash Action External',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
