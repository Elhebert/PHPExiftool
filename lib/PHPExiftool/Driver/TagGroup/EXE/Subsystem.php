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
class Subsystem extends AbstractTagGroup
{
    protected string $id = 'EXE:Subsystem';

    protected string $name = 'Subsystem';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subsystem',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::Main
             * line : 80511
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::Main.EXE:Subsystem',
            'desc' => [
                'en' => 'Subsystem',
            ],
        ],
    ];

    protected int $count = 0;
}
