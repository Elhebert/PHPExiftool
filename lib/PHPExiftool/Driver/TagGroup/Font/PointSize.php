<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PointSize extends AbstractTagGroup
{
    protected string $id = 'Font:PointSize';

    protected string $name = 'PointSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PFM
             * line : 127990
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:PointSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
