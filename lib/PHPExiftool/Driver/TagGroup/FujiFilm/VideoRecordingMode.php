<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoRecordingMode extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:VideoRecordingMode';

    protected string $name = 'VideoRecordingMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Video Recording Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 90395
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:VideoRecordingMode',
            'desc' => [
                'en' => 'Video Recording Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
