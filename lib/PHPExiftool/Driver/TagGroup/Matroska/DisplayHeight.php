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
class DisplayHeight extends AbstractTagGroup
{
    protected string $id = 'Matroska:DisplayHeight';

    protected string $name = 'DisplayHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 173697
             * type : unsigned
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:DisplayHeight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
