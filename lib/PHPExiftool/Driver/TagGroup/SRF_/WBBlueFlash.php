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
class WBBlueFlash extends AbstractTagGroup
{
    protected string $id = 'SRF#:WBBlueFlash';

    protected string $name = 'WBBlueFlash';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::SRF2
             * line : 362004
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::SRF2.SRF#:WBBlueFlash',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
