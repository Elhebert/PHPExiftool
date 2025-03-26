<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StreamingDataProtocol extends AbstractTagGroup
{
    protected string $id = 'QuickTime:StreamingDataProtocol';

    protected string $name = 'StreamingDataProtocol';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HintInfo
             * line : 313733
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::HintInfo.QuickTime:StreamingDataProtocol',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
