<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioSampleRate extends AbstractTagGroup
{
    protected string $id = 'Flash:AudioSampleRate';

    protected string $name = 'AudioSampleRate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Flash::Audio
             * line : 123839
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Flash::Audio.Flash:AudioSampleRate',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Flash::Meta
             * line : 124013
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Flash::Meta.Flash:AudioSampleRate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
