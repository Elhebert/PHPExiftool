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
class AudioAvailableBitRateRange extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioAvailableBitRateRange';

    protected string $name = 'AudioAvailableBitRateRange';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Available Bit Rate Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::EncodingParams
             * line : 218509
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::EncodingParams.QuickTime:AudioAvailableBitRateRange',
            'desc' => [
                'en' => 'Audio Available Bit Rate Range',
            ],
        ],
    ];

    protected int $count = 0;
}
