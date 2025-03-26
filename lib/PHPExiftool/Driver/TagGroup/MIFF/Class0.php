<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Class0 extends AbstractTagGroup
{
    protected string $id = 'MIFF:Class';

    protected string $name = 'Class';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Class',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIFF::Main
             * line : 111700
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MIFF::Main.MIFF:Class',
            'desc' => [
                'en' => 'Class',
            ],
        ],
    ];

    protected int $count = 0;
}
