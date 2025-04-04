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
class SubsystemVersion extends AbstractTagGroup
{
    protected string $id = 'EXE:SubsystemVersion';

    protected string $name = 'SubsystemVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subsystem Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::Main
             * line : 80508
             * type : int16u
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'EXE::Main.EXE:SubsystemVersion',
            'desc' => [
                'en' => 'Subsystem Version',
            ],
        ],
    ];

    protected int $count = 2;
}
