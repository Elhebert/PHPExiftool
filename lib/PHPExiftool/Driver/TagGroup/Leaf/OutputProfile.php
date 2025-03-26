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
class OutputProfile extends AbstractTagGroup
{
    protected string $id = 'Leaf:OutputProfile';

    protected string $name = 'OutputProfile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::ColorSetup
             * line : 161820
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::ColorSetup.Leaf:OutputProfile',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
