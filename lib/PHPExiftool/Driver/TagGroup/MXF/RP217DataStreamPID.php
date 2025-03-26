<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RP217DataStreamPID extends AbstractTagGroup
{
    protected string $id = 'MXF:RP217DataStreamPID';

    protected string $name = 'RP217DataStreamPID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 172001
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RP217DataStreamPID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
