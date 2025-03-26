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
class CPUType extends AbstractTagGroup
{
    protected string $id = 'EXE:CPUType';

    protected string $name = 'CPUType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::ELF
             * line : 108045
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::ELF.EXE:CPUType',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : EXE::MachO
             * line : 108171
             * type : ?
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'EXE::MachO.EXE:CPUType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
