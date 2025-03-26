<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageOffset extends AbstractTagGroup
{
    protected string $id = 'Leaf:ImageOffset';

    protected string $name = 'ImageOffset';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::CaptureProfile
             * line : 161707
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::CaptureProfile.Leaf:ImageOffset',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Leaf::Main
             * line : 161905
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::Main.Leaf:ImageOffset',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
