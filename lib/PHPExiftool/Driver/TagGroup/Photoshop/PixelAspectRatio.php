<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelAspectRatio extends AbstractTagGroup
{
    protected string $id = 'Photoshop:PixelAspectRatio';

    protected string $name = 'PixelAspectRatio';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::PixelInfo
             * line : 305714
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Photoshop::PixelInfo.Photoshop:PixelAspectRatio',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
