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
class PreAF extends AbstractTagGroup
{
    protected string $id = 'FujiFilm:PreAF';

    protected string $name = 'PreAF';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Pre AF',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::FocusSettings
             * line : 89243
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'FujiFilm::FocusSettings.FujiFilm:PreAF',
            'desc' => [
                'en' => 'Pre AF',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
