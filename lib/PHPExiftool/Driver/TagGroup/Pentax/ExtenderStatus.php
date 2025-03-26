<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExtenderStatus extends AbstractTagGroup
{
    protected string $id = 'Pentax:ExtenderStatus';

    protected string $name = 'ExtenderStatus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Extender Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::LensRec
             * line : 205843
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::LensRec.Pentax:ExtenderStatus',
            'desc' => [
                'en' => 'Extender Status',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
