<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MicrophoneAttenuator extends AbstractTagGroup
{
    protected string $id = 'Nikon:MicrophoneAttenuator';

    protected string $name = 'MicrophoneAttenuator';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Microphone Attenuator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136534
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:MicrophoneAttenuator',
            'desc' => [
                'en' => 'Microphone Attenuator',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
