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
class ObjectFileType extends AbstractTagGroup
{
    protected string $id = 'EXE:ObjectFileType';

    protected string $name = 'ObjectFileType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::ELF
             * line : 108010
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::ELF.EXE:ObjectFileType',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : EXE::MachO
             * line : 108566
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::MachO.EXE:ObjectFileType',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : EXE::PEVersion
             * line : 109661
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::PEVersion.EXE:ObjectFileType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
