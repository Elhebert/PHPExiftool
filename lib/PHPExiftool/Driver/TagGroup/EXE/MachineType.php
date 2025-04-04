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
class MachineType extends AbstractTagGroup
{
    protected string $id = 'EXE:MachineType';

    protected string $name = 'MachineType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Machine Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::Main
             * line : 80334
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::Main.EXE:MachineType',
            'desc' => [
                'en' => 'Machine Type',
            ],
        ],
    ];

    protected int $count = 0;
}
