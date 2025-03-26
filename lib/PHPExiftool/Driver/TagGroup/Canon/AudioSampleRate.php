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
class AudioSampleRate extends AbstractTagGroup
{
    protected string $id = 'Canon:AudioSampleRate';

    protected string $name = 'AudioSampleRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Audio Sample Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::MovieInfo
             * line : 50795
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::MovieInfo.Canon:AudioSampleRate',
            'desc' => [
                'en' => 'Audio Sample Rate',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
