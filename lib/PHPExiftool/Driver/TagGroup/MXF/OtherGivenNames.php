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
class OtherGivenNames extends AbstractTagGroup
{
    protected string $id = 'MXF:OtherGivenNames';

    protected string $name = 'OtherGivenNames';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Other Given Names',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116937
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:OtherGivenNames',
            'desc' => [
                'en' => 'Other Given Names',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116940
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:OtherGivenNames',
            'desc' => [
                'en' => 'Other Given Names',
            ],
        ],
    ];

    protected int $count = 0;
}
