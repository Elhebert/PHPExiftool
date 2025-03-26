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
class Abstract0 extends AbstractTagGroup
{
    protected string $id = 'MXF:Abstract';

    protected string $name = 'Abstract';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Abstract',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114275
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Abstract',
            'desc' => [
                'en' => 'Abstract',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116460
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Abstract',
            'desc' => [
                'en' => 'Abstract',
            ],
        ],
    ];

    protected int $count = 0;
}
