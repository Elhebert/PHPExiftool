<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_GBRGLevels extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:WB_GBRGLevels';

    protected string $name = 'WB_GBRGLevels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::WBG
             * line : 187806
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'MinoltaRaw::WBG.MinoltaRaw:WB_GBRGLevels',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
