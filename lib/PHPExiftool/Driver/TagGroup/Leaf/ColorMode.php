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
class ColorMode extends AbstractTagGroup
{
    protected string $id = 'Leaf:ColorMode';

    protected string $name = 'ColorMode';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::ColorSetup
             * line : 161785
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::ColorSetup.Leaf:ColorMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
