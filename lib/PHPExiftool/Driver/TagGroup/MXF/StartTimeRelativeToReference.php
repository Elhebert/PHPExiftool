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
class StartTimeRelativeToReference extends AbstractTagGroup
{
    protected string $id = 'MXF:StartTimeRelativeToReference';

    protected string $name = 'StartTimeRelativeToReference';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 168543
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StartTimeRelativeToReference',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 169674
             * type : int64s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:StartTimeRelativeToReference',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
