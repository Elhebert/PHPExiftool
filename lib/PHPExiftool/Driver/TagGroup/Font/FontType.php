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
class FontType extends AbstractTagGroup
{
    protected string $id = 'Font:FontType';

    protected string $name = 'FontType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PFM
             * line : 127985
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:FontType',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Font::PSInfo
             * line : 128144
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PSInfo.Font:FontType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
