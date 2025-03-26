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
class CoverArtType extends AbstractTagGroup
{
    protected string $id = 'Audible:CoverArtType';

    protected string $name = 'CoverArtType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Audible::cvrx
             * line : 3040
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Audible::cvrx.Audible:CoverArtType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
