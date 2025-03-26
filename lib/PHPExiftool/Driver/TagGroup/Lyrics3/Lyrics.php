<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lyrics3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Lyrics extends AbstractTagGroup
{
    protected string $id = 'Lyrics3:Lyrics';

    protected string $name = 'Lyrics';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lyrics',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::Lyrics3
             * line : 102156
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::Lyrics3.Lyrics3:Lyrics',
            'desc' => [
                'en' => 'Lyrics',
            ],
        ],
    ];

    protected int $count = 0;
}
