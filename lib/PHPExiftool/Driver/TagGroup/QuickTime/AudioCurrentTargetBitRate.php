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
class AudioCurrentTargetBitRate extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioCurrentTargetBitRate';

    protected string $name = 'AudioCurrentTargetBitRate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Current Target Bit Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::EncodingParams
             * line : 218518
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::EncodingParams.QuickTime:AudioCurrentTargetBitRate',
            'desc' => [
                'en' => 'Audio Current Target Bit Rate',
            ],
        ],
    ];

    protected int $count = 0;
}
