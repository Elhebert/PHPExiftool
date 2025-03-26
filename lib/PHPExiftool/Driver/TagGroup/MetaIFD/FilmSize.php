<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MetaIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FilmSize extends AbstractTagGroup
{
    protected string $id = 'MetaIFD:FilmSize';

    protected string $name = 'FilmSize';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Film Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Meta
             * line : 108928
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Kodak::Meta.MetaIFD:FilmSize',
            'desc' => [
                'en' => 'Film Size',
            ],
        ],
    ];

    protected int $count = 0;
}
