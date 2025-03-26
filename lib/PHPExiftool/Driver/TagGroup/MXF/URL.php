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
class URL extends AbstractTagGroup
{
    protected string $id = 'MXF:URL';

    protected string $name = 'URL';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 113955
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:URL',
            'desc' => [
                'en' => 'URL',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 113958
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:URL',
            'desc' => [
                'en' => 'URL',
            ],
        ],
        2 => [
            /**
             * table_name : MXF::Main
             * line : 117156
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:URL',
            'desc' => [
                'en' => 'URL',
            ],
        ],
        3 => [
            /**
             * table_name : MXF::Main
             * line : 117814
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:URL',
            'desc' => [
                'en' => 'URL',
            ],
        ],
    ];

    protected int $count = 0;
}
