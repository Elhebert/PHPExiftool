<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReversePlay extends AbstractTagGroup
{
    protected string $id = 'MXF:ReversePlay';

    protected string $name = 'ReversePlay';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Reverse Play',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117117
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ReversePlay',
            'desc' => [
                'en' => 'Reverse Play',
            ],
        ],
    ];

    protected int $count = 0;
}
