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
class WhiteBalanceAdj extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:WhiteBalanceAdj';

    protected string $name = 'WhiteBalanceAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Adj',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::Main
             * line : 141802
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::Main.NikonCapture:WhiteBalanceAdj',
            'desc' => [
                'en' => 'White Balance Adj',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
