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
class Cue_OutWords extends AbstractTagGroup
{
    protected string $id = 'MXF:Cue-OutWords';

    protected string $name = 'Cue-OutWords';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Cue-Out Words',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115421
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Cue-OutWords',
            'desc' => [
                'en' => 'Cue-Out Words',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116985
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Cue-OutWords',
            'desc' => [
                'en' => 'Cue-Out Words',
            ],
        ],
    ];

    protected int $count = 0;
}
