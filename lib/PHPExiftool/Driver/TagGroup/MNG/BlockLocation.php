<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlockLocation extends AbstractTagGroup
{
    protected string $id = 'MNG:BlockLocation';

    protected string $name = 'BlockLocation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Block Location',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::DeltaPNGHeader
             * line : 112031
             * type : int32u
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'MNG::DeltaPNGHeader.MNG:BlockLocation',
            'desc' => [
                'en' => 'Block Location',
            ],
        ],
    ];

    protected int $count = 2;
}
