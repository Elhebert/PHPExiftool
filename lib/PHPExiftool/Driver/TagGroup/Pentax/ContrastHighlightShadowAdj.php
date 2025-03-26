<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContrastHighlightShadowAdj extends AbstractTagGroup
{
    protected string $id = 'Pentax:ContrastHighlightShadowAdj';

    protected string $name = 'ContrastHighlightShadowAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast Highlight/Shadow Adj',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209204
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ContrastHighlightShadowAdj',
            'desc' => [
                'en' => 'Contrast Highlight/Shadow Adj',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
