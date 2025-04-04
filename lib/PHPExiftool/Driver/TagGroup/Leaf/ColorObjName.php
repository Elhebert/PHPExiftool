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
class ColorObjName extends AbstractTagGroup
{
    protected string $id = 'Leaf:ColorObjName';

    protected string $name = 'ColorObjName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Color Obj Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::ColorSetup
             * line : 110544
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::ColorSetup.Leaf:ColorObjName',
            'desc' => [
                'en' => 'Color Obj Name',
            ],
        ],
    ];

    protected int $count = 0;
}
