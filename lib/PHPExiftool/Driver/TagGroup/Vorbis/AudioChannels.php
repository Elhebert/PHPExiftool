<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioChannels extends AbstractTagGroup
{
    protected string $id = 'Vorbis:AudioChannels';

    protected string $name = 'AudioChannels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Vorbis::Identification
             * line : 395921
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Vorbis::Identification.Vorbis:AudioChannels',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
