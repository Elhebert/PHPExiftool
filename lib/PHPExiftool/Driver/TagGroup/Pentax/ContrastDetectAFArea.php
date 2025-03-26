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
class ContrastDetectAFArea extends AbstractTagGroup
{
    protected string $id = 'Pentax:ContrastDetectAFArea';

    protected string $name = 'ContrastDetectAFArea';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast Detect AF Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209691
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ContrastDetectAFArea',
            'desc' => [
                'en' => 'Contrast Detect AF Area',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
