<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitsPerSample extends AbstractTagGroup
{
    protected string $id = 'FujiIFD:BitsPerSample';

    protected string $name = 'BitsPerSample';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FujiFilm::IFD
             * line : 128653
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FujiFilm::IFD.FujiIFD:BitsPerSample',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
