<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FacesRecognized extends AbstractTagGroup
{
    protected string $id = 'Panasonic:FacesRecognized';

    protected string $name = 'FacesRecognized';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Faces Recognized',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::FaceRecInfo
             * line : 191270
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::FaceRecInfo.Panasonic:FacesRecognized',
            'desc' => [
                'en' => 'Faces Recognized',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
