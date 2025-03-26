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
class SampleRate extends AbstractTagGroup
{
    protected string $id = 'RIFF:SampleRate';

    protected string $name = 'SampleRate';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sample Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::AudioFormat
             * line : 231330
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::AudioFormat.RIFF:SampleRate',
            'desc' => [
                'en' => 'Sample Rate',
            ],
        ],
    ];

    protected int $count = 0;
}
