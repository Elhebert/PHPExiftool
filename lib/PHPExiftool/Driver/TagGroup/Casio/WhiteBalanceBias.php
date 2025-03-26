<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceBias extends AbstractTagGroup
{
    protected string $id = 'Casio:WhiteBalanceBias';

    protected string $name = 'WhiteBalanceBias';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Bias',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Type2
             * line : 62145
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:WhiteBalanceBias',
            'desc' => [
                'en' => 'White Balance Bias',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
