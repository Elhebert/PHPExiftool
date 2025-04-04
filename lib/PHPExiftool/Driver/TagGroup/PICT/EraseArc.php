<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EraseArc extends AbstractTagGroup
{
    protected string $id = 'PICT:EraseArc';

    protected string $name = 'EraseArc';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Erase Arc',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183107
             * type : Arc
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:EraseArc',
            'desc' => [
                'en' => 'Erase Arc',
            ],
        ],
    ];

    protected int $count = 0;
}
