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
class QltyOperatorComment extends AbstractTagGroup
{
    protected string $id = 'MXF:QltyOperatorComment';

    protected string $name = 'QltyOperatorComment';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Qlty Operator Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117580
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:QltyOperatorComment',
            'desc' => [
                'en' => 'Qlty Operator Comment',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117583
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:QltyOperatorComment',
            'desc' => [
                'en' => 'Qlty Operator Comment',
            ],
        ],
    ];

    protected int $count = 0;
}
