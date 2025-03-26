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
class SonyImageSize extends AbstractTagGroup
{
    protected string $id = 'Sony:SonyImageSize';

    protected string $name = 'SonyImageSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sony Image Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243640
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:SonyImageSize',
            'desc' => [
                'en' => 'Sony Image Size',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244212
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:SonyImageSize',
            'desc' => [
                'en' => 'Sony Image Size',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244531
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:SonyImageSize',
            'desc' => [
                'en' => 'Sony Image Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
