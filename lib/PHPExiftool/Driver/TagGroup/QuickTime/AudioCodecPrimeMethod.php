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
class AudioCodecPrimeMethod extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioCodecPrimeMethod';

    protected string $name = 'AudioCodecPrimeMethod';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Codec Prime Method',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::EncodingParams
             * line : 218557
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::EncodingParams.QuickTime:AudioCodecPrimeMethod',
            'desc' => [
                'en' => 'Audio Codec Prime Method',
            ],
        ],
    ];

    protected int $count = 0;
}
