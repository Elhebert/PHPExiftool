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
class InvertSameRgn extends AbstractTagGroup
{
    protected string $id = 'PICT:InvertSameRgn';

    protected string $name = 'InvertSameRgn';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Invert Same Rgn',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183200
             * type : null
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:InvertSameRgn',
            'desc' => [
                'en' => 'Invert Same Rgn',
            ],
        ],
    ];

    protected int $count = 0;
}
