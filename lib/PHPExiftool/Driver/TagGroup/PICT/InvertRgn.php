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
class InvertRgn extends AbstractTagGroup
{
    protected string $id = 'PICT:InvertRgn';

    protected string $name = 'InvertRgn';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Invert Rgn',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 183182
             * type : Rgn
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:InvertRgn',
            'desc' => [
                'en' => 'Invert Rgn',
            ],
        ],
    ];

    protected int $count = 0;
}
