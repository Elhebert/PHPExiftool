<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AverageFrameRate extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AverageFrameRate';

    protected string $name = 'AverageFrameRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HEVCConfig
             * line : 313509
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HEVCConfig.QuickTime:AverageFrameRate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
