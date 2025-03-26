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
class PreviewImageValid extends AbstractTagGroup
{
    protected string $id = 'Olympus:PreviewImageValid';

    protected string $name = 'PreviewImageValid';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image Valid',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 172832
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::CameraSettings.Olympus:PreviewImageValid',
            'desc' => [
                'en' => 'Preview Image Valid',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178780
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:PreviewImageValid',
            'desc' => [
                'en' => 'Preview Image Valid',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
