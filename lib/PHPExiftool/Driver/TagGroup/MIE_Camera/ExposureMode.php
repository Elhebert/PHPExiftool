<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Camera;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureMode extends AbstractTagGroup
{
    protected string $id = 'MIE-Camera:ExposureMode';

    protected string $name = 'ExposureMode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Camera
             * line : 111272
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Camera.MIE-Camera:ExposureMode',
            'desc' => [
                'en' => 'Exposure Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
