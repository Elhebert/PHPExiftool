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
class FlashExposureCompSet extends AbstractTagGroup
{
    protected string $id = 'Minolta:FlashExposureCompSet';

    protected string $name = 'FlashExposureCompSet';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Exposure Comp. Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123113
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:FlashExposureCompSet',
            'desc' => [
                'en' => 'Flash Exposure Comp. Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
