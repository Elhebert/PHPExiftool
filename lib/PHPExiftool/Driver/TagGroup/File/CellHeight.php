<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CellHeight extends AbstractTagGroup
{
    protected string $id = 'File:CellHeight';

    protected string $name = 'CellHeight';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::Main
             * line : 166891
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::Main.File:CellHeight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
