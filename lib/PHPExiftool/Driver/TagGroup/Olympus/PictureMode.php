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
class PictureMode extends AbstractTagGroup
{
    protected string $id = 'Olympus:PictureMode';

    protected string $name = 'PictureMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 173555
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:PictureMode',
            'desc' => [
                'en' => 'Picture Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
