<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RAF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawImageSize extends AbstractTagGroup
{
    protected string $id = 'RAF:RawImageSize';

    protected string $name = 'RawImageSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Raw Image Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::RAF
             * line : 90534
             * type : int16u
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'FujiFilm::RAF.RAF:RawImageSize',
            'desc' => [
                'en' => 'Raw Image Size',
            ],
        ],
        1 => [
            /**
             * table_name : FujiFilm::RAF
             * line : 90537
             * type : int16u
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'FujiFilm::RAF.RAF:RawImageSize',
            'desc' => [
                'en' => 'Raw Image Size',
            ],
        ],
    ];

    protected int $count = 2;
}
