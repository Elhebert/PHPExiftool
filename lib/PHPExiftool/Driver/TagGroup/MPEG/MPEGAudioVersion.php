<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MPEGAudioVersion extends AbstractTagGroup
{
    protected string $id = 'MPEG:MPEGAudioVersion';

    protected string $name = 'MPEGAudioVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MPEG Audio Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MPEG::Audio
             * line : 112643
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MPEG::Audio.MPEG:MPEGAudioVersion',
            'desc' => [
                'en' => 'MPEG Audio Version',
            ],
        ],
    ];

    protected int $count = 0;
}
