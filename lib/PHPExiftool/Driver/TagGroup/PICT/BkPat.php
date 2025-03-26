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
class BkPat extends AbstractTagGroup
{
    protected string $id = 'PICT:BkPat';

    protected string $name = 'BkPat';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 264612
             * type : int8u
             * writable : false
             * count : 8
             * flags :
             */
            'id' => 'PICT::Main.PICT:BkPat',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 8;
}
