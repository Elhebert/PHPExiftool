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
class AFButtonPressed extends AbstractTagGroup
{
    protected string $id = 'Sony:AFButtonPressed';

    protected string $name = 'AFButtonPressed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Button Pressed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245127
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:AFButtonPressed',
            'desc' => [
                'en' => 'AF Button Pressed',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245253
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:AFButtonPressed',
            'desc' => [
                'en' => 'AF Button Pressed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
