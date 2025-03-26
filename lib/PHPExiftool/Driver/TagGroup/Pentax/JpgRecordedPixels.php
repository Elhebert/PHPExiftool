<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JpgRecordedPixels extends AbstractTagGroup
{
    protected string $id = 'Pentax:JpgRecordedPixels';

    protected string $name = 'JpgRecordedPixels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Jpg Recorded Pixels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::CameraSettings
             * line : 197817
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::CameraSettings.Pentax:JpgRecordedPixels',
            'desc' => [
                'en' => 'Jpg Recorded Pixels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
