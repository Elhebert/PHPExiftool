<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'GIF:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GIF::Screen
             * line : 131370
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GIF::Screen.GIF:ImageWidth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
