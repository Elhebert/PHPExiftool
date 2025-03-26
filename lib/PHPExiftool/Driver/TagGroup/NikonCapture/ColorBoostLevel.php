<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorBoostLevel extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:ColorBoostLevel';

    protected string $name = 'ColorBoostLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Boost Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::ColorBoost
             * line : 141536
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::ColorBoost.NikonCapture:ColorBoostLevel',
            'desc' => [
                'en' => 'Color Boost Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
