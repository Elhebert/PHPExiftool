<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA5;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitsPerSample extends AbstractTagGroup
{
    protected string $id = 'Real-RA5:BitsPerSample';

    protected string $name = 'BitsPerSample';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bits Per Sample',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::AudioV5
             * line : 232345
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Real::AudioV5.Real-RA5:BitsPerSample',
            'desc' => [
                'en' => 'Bits Per Sample',
            ],
        ],
    ];

    protected int $count = 0;
}
