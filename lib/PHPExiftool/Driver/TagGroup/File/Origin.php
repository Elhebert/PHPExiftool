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
class Origin extends AbstractTagGroup
{
    protected string $id = 'File:Origin';

    protected string $name = 'Origin';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Origin',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::Main
             * line : 113658
             * type : float
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'MRC::Main.File:Origin',
            'desc' => [
                'en' => 'Origin',
            ],
        ],
    ];

    protected int $count = 3;
}
