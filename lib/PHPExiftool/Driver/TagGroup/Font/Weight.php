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
class Weight extends AbstractTagGroup
{
    protected string $id = 'Font:Weight';

    protected string $name = 'Weight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::AFM
             * line : 127802
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::AFM.Font:Weight',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Font::PFM
             * line : 128051
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:Weight',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Font::PSInfo
             * line : 128169
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PSInfo.Font:Weight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
