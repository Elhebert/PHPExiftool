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
class RoleName extends AbstractTagGroup
{
    protected string $id = 'MXF:RoleName';

    protected string $name = 'RoleName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Role Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114168
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RoleName',
            'desc' => [
                'en' => 'Role Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116361
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RoleName',
            'desc' => [
                'en' => 'Role Name',
            ],
        ],
    ];

    protected int $count = 0;
}
