<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DishType extends AbstractTagGroup
{
    protected string $id = 'XMP-prm:DishType';

    protected string $name = 'DishType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Dish Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prm
             * line : 290415
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::prm.XMP-prm:DishType',
            'desc' => [
                'en' => 'Dish Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
