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
class AssignedCategoryName extends AbstractTagGroup
{
    protected string $id = 'MXF:AssignedCategoryName';

    protected string $name = 'AssignedCategoryName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Assigned Category Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115400
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AssignedCategoryName',
            'desc' => [
                'en' => 'Assigned Category Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115403
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AssignedCategoryName',
            'desc' => [
                'en' => 'Assigned Category Name',
            ],
        ],
    ];

    protected int $count = 0;
}
