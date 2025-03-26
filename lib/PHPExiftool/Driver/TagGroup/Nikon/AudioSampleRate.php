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
class AudioSampleRate extends AbstractTagGroup
{
    protected string $id = 'Nikon:AudioSampleRate';

    protected string $name = 'AudioSampleRate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Sample Rate',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::NCTG
             * line : 136941
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:AudioSampleRate',
            'desc' => [
                'en' => 'Audio Sample Rate',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
