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
class FirstNumberInSequence extends AbstractTagGroup
{
    protected string $id = 'MXF:FirstNumberInSequence';

    protected string $name = 'FirstNumberInSequence';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 170890
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FirstNumberInSequence',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 170893
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FirstNumberInSequence',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
