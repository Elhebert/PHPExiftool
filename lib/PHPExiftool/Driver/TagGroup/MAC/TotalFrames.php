<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TotalFrames extends AbstractTagGroup
{
    protected string $id = 'MAC:TotalFrames';

    protected string $name = 'TotalFrames';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : APE::NewHeader
             * line : 363
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'APE::NewHeader.MAC:TotalFrames',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : APE::OldHeader
             * line : 437
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'APE::OldHeader.MAC:TotalFrames',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
