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
class WBAdjMode extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:WBAdjMode';

    protected string $name = 'WBAdjMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB Adj Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::WBAdjData
             * line : 142220
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::WBAdjData.NikonCapture:WBAdjMode',
            'desc' => [
                'en' => 'WB Adj Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
