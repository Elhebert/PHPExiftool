<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFileName extends AbstractTagGroup
{
    protected string $id = 'Red:OriginalFileName';

    protected string $name = 'OriginalFileName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Red::Main
             * line : 331500
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Red::Main.Red:OriginalFileName',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Red::RED1
             * line : 331722
             * type : string
             * writable : false
             * count : 32
             * flags :
             */
            'id' => 'Red::RED1.Red:OriginalFileName',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 32;
}
