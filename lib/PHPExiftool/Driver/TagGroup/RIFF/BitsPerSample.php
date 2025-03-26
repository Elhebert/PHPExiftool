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
class BitsPerSample extends AbstractTagGroup
{
    protected string $id = 'RIFF:BitsPerSample';

    protected string $name = 'BitsPerSample';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bits Per Sample',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RIFF::AudioFormat
             * line : 231336
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RIFF::AudioFormat.RIFF:BitsPerSample',
            'desc' => [
                'en' => 'Bits Per Sample',
            ],
        ],
    ];

    protected int $count = 0;
}
