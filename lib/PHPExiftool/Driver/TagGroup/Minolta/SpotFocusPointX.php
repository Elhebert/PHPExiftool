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
class SpotFocusPointX extends AbstractTagGroup
{
    protected string $id = 'Minolta:SpotFocusPointX';

    protected string $name = 'SpotFocusPointX';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Spot Focus Point X',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 122181
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:SpotFocusPointX',
            'desc' => [
                'en' => 'Spot Focus Point X',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
