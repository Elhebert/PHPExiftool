<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SRF_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WBGreenFlash extends AbstractTagGroup
{
    protected string $id = 'SRF#:WBGreenFlash';

    protected string $name = 'WBGreenFlash';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB Green Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::SRF2
             * line : 252050
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::SRF2.SRF#:WBGreenFlash',
            'desc' => [
                'en' => 'WB Green Flash',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
