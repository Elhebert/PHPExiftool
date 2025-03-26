<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BW_HalftoningInfo extends AbstractTagGroup
{
    protected string $id = 'Photoshop:BW_HalftoningInfo';

    protected string $name = 'BW_HalftoningInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 305413
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Photoshop::Main.Photoshop:BW_HalftoningInfo',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
