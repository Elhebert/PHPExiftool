<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ObjectFlags extends AbstractTagGroup
{
    protected string $id = 'EXE:ObjectFlags';

    protected string $name = 'ObjectFlags';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::MachO
             * line : 108618
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::MachO.EXE:ObjectFlags',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
