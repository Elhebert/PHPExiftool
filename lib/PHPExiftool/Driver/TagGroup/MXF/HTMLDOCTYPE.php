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
class HTMLDOCTYPE extends AbstractTagGroup
{
    protected string $id = 'MXF:HTMLDOCTYPE';

    protected string $name = 'HTMLDOCTYPE';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'HTMLDOCTYPE',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118072
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:HTMLDOCTYPE',
            'desc' => [
                'en' => 'HTMLDOCTYPE',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 118075
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:HTMLDOCTYPE',
            'desc' => [
                'en' => 'HTMLDOCTYPE',
            ],
        ],
    ];

    protected int $count = 0;
}
