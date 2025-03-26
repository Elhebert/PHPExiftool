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
class AudioBitsPerSample extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioBitsPerSample';

    protected string $name = 'AudioBitsPerSample';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Bits Per Sample',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::AudioSampleDesc
             * line : 216393
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::AudioSampleDesc.QuickTime:AudioBitsPerSample',
            'desc' => [
                'en' => 'Audio Bits Per Sample',
            ],
        ],
    ];

    protected int $count = 0;
}
