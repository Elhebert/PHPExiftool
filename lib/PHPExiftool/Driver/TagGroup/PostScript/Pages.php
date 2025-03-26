<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PostScript;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Pages extends AbstractTagGroup
{
    protected string $id = 'PostScript:Pages';

    protected string $name = 'Pages';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Pages',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PostScript::Main
             * line : 212607
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PostScript::Main.PostScript:Pages',
            'desc' => [
                'en' => 'Pages',
            ],
        ],
    ];

    protected int $count = 0;
}
