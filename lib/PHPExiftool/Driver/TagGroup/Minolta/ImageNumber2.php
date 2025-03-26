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
class ImageNumber2 extends AbstractTagGroup
{
    protected string $id = 'Minolta:ImageNumber2';

    protected string $name = 'ImageNumber2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Number 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122864
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:ImageNumber2',
            'desc' => [
                'en' => 'Image Number 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
