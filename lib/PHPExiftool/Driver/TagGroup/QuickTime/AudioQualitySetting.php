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
class AudioQualitySetting extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioQualitySetting';

    protected string $name = 'AudioQualitySetting';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Quality Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::EncodingParams
             * line : 218560
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::EncodingParams.QuickTime:AudioQualitySetting',
            'desc' => [
                'en' => 'Audio Quality Setting',
            ],
        ],
    ];

    protected int $count = 0;
}
