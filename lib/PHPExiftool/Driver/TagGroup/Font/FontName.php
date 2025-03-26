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
class FontName extends AbstractTagGroup
{
    protected string $id = 'Font:FontName';

    protected string $name = 'FontName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::AFM
             * line : 127767
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::AFM.Font:FontName',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Font::Main
             * line : 127816
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Main.Font:FontName',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Font::Name
             * line : 127869
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Name.Font:FontName',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Font::PSInfo
             * line : 128139
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PSInfo.Font:FontName',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
