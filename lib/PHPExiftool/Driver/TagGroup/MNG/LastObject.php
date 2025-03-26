<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastObject extends AbstractTagGroup
{
    protected string $id = 'MNG:LastObject';

    protected string $name = 'LastObject';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::ClipObjects
             * line : 164680
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::ClipObjects.MNG:LastObject',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : MNG::MoveObjects
             * line : 165232
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::MoveObjects.MNG:LastObject',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : MNG::ShowObjects
             * line : 165385
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::ShowObjects.MNG:LastObject',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
