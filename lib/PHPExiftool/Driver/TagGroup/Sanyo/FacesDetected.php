<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FacesDetected extends AbstractTagGroup
{
    protected string $id = 'Sanyo:FacesDetected';

    protected string $name = 'FacesDetected';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Faces Detected',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::FaceInfo
             * line : 235558
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sanyo::FaceInfo.Sanyo:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
