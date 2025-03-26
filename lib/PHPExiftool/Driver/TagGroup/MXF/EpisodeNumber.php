<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EpisodeNumber extends AbstractTagGroup
{
    protected string $id = 'MXF:EpisodeNumber';

    protected string $name = 'EpisodeNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Episode Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114033
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:EpisodeNumber',
            'desc' => [
                'en' => 'Episode Number',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116169
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:EpisodeNumber',
            'desc' => [
                'en' => 'Episode Number',
            ],
        ],
    ];

    protected int $count = 0;
}
