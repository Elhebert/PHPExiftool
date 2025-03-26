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
class PostScriptFontName extends AbstractTagGroup
{
    protected string $id = 'Font:PostScriptFontName';

    protected string $name = 'PostScriptFontName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::Main
             * line : 127825
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Main.Font:PostScriptFontName',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Font::Name
             * line : 127878
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Name.Font:PostScriptFontName',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Font::Name
             * line : 127944
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Name.Font:PostScriptFontName',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
