<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalance extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:WhiteBalance';

    protected string $name = 'WhiteBalance';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'White Balance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Header
             * line : 237520
             * type : string
             * writable : false
             * count : 32
             * flags :
             */
            'id' => 'SigmaRaw::Header.SigmaRaw:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        1 => [
            /**
             * table_name : SigmaRaw::Properties
             * line : 238364
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Properties.SigmaRaw:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
    ];

    protected int $count = 32;
}
