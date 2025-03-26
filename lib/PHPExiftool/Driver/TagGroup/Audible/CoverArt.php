<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Audible;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CoverArt extends AbstractTagGroup
{
    protected string $id = 'Audible:CoverArt';

    protected string $name = 'CoverArt';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Cover Art',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Audible::Main
             * line : 1918
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Audible::Main.Audible:CoverArt',
            'desc' => [
                'en' => 'Cover Art',
            ],
        ],
        1 => [
            /**
             * table_name : Audible::cvrx
             * line : 1937
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Audible::cvrx.Audible:CoverArt',
            'desc' => [
                'en' => 'Cover Art',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
