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
class MainIngredient extends AbstractTagGroup
{
    protected string $id = 'XMP-prm:MainIngredient';

    protected string $name = 'MainIngredient';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Main Ingredient',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prm
             * line : 290424
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::prm.XMP-prm:MainIngredient',
            'desc' => [
                'en' => 'Main Ingredient',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
