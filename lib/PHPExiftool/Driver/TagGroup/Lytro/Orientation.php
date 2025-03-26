<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Orientation extends AbstractTagGroup
{
    protected string $id = 'Lytro:Orientation';

    protected string $name = 'Orientation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Lytro::Main
             * line : 110881
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Lytro::Main.Lytro:Orientation',
            'desc' => [
                'en' => 'Orientation',
            ],
        ],
    ];

    protected int $count = 0;
}
