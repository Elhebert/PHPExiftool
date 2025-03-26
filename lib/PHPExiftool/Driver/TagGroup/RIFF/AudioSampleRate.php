<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioSampleRate extends AbstractTagGroup
{
    protected string $id = 'RIFF:AudioSampleRate';

    protected string $name = 'AudioSampleRate';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::StreamHeader
             * line : 328805
             * type : rational64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::StreamHeader.RIFF:AudioSampleRate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
