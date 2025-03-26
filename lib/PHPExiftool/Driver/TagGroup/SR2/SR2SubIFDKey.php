<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SR2;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SR2SubIFDKey extends AbstractTagGroup
{
    protected string $id = 'SR2:SR2SubIFDKey';

    protected string $name = 'SR2SubIFDKey';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::SR2Private
             * line : 361677
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::SR2Private.SR2:SR2SubIFDKey',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
