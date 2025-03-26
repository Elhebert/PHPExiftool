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
class HeaderOp extends AbstractTagGroup
{
    protected string $id = 'PICT:HeaderOp';

    protected string $name = 'HeaderOp';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 265074
             * type : int16u
             * writable : false
             * count : 12
             * flags :
             */
            'id' => 'PICT::Main.PICT:HeaderOp',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 12;
}
