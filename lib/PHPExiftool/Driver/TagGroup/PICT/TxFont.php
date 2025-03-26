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
class TxFont extends AbstractTagGroup
{
    protected string $id = 'PICT:TxFont';

    protected string $name = 'TxFont';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Font Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 182873
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:TxFont',
            'desc' => [
                'en' => 'Font Number',
            ],
        ],
    ];

    protected int $count = 0;
}
