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
class SeasonEpisodeNumber extends AbstractTagGroup
{
    protected string $id = 'MXF:SeasonEpisodeNumber';

    protected string $name = 'SeasonEpisodeNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Season Episode Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115193
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:SeasonEpisodeNumber',
            'desc' => [
                'en' => 'Season Episode Number',
            ],
        ],
    ];

    protected int $count = 0;
}
