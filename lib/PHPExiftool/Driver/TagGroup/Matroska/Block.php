<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Block extends AbstractTagGroup
{
    protected string $id = 'Matroska:Block';

    protected string $name = 'Block';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Block',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119258
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Matroska::Main.Matroska:Block',
            'desc' => [
                'en' => 'Block',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
