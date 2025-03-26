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
class PictureModeContrast extends AbstractTagGroup
{
    protected string $id = 'Olympus:PictureModeContrast';

    protected string $name = 'PictureModeContrast';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Mode Contrast',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 173611
             * type : int16s
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:PictureModeContrast',
            'desc' => [
                'en' => 'Picture Mode Contrast',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
