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
class AudioSampleRate extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioSampleRate';

    protected string $name = 'AudioSampleRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::AudioProf
             * line : 310408
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::AudioProf.QuickTime:AudioSampleRate',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::AudioSampleDesc
             * line : 310499
             * type : fixed32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::AudioSampleDesc.QuickTime:AudioSampleRate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
