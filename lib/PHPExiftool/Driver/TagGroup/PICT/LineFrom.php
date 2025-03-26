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
class LineFrom extends AbstractTagGroup
{
    protected string $id = 'PICT:LineFrom';

    protected string $name = 'LineFrom';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Line From',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 182957
             * type : Point
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:LineFrom',
            'desc' => [
                'en' => 'Line From',
            ],
        ],
    ];

    protected int $count = 0;
}
