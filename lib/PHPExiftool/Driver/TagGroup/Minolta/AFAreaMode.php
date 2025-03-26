<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:AFAreaMode';

    protected string $name = 'AFAreaMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraInfoA100
             * line : 121758
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraInfoA100.Minolta:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123082
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
