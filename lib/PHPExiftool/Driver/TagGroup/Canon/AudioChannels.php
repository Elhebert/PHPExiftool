<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioChannels extends AbstractTagGroup
{
    protected string $id = 'Canon:AudioChannels';

    protected string $name = 'AudioChannels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Audio Channels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::MovieInfo
             * line : 50798
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::MovieInfo.Canon:AudioChannels',
            'desc' => [
                'en' => 'Audio Channels',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
