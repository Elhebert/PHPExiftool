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
class WhiteBalanceFineTune extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:WhiteBalanceFineTune';

    protected string $name = 'WhiteBalanceFineTune';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance Fine Tune',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::Main
             * line : 89561
             * type : int32s
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'FujiFilm::Main.FujiFilm:WhiteBalanceFineTune',
            'desc' => [
                'en' => 'White Balance Fine Tune',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
