<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LinearityLimitBlue extends AbstractTagGroup
{
    protected string $id = 'IFD0:LinearityLimitBlue';

    protected string $name = 'LinearityLimitBlue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Linearity Limit Blue',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PanasonicRaw::Main
             * line : 194589
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PanasonicRaw::Main.IFD0:LinearityLimitBlue',
            'desc' => [
                'en' => 'Linearity Limit Blue',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
