<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneMatrix extends AbstractTagGroup
{
    protected string $id = 'Leaf:ToneMatrix';

    protected string $name = 'ToneMatrix';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ICC To Tone Matrix',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::Main
             * line : 110610
             * type : int8u
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Leaf::Main.Leaf:ToneMatrix',
            'desc' => [
                'en' => 'ICC To Tone Matrix',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
