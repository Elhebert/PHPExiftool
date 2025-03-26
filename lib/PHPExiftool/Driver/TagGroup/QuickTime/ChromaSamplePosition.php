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
class ChromaSamplePosition extends AbstractTagGroup
{
    protected string $id = 'QuickTime:ChromaSamplePosition';

    protected string $name = 'ChromaSamplePosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chroma Sample Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::AV1Config
             * line : 216239
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::AV1Config.QuickTime:ChromaSamplePosition',
            'desc' => [
                'en' => 'Chroma Sample Position',
            ],
        ],
    ];

    protected int $count = 0;
}
