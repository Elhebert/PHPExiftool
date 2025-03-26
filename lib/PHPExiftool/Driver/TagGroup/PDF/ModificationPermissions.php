<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModificationPermissions extends AbstractTagGroup
{
    protected string $id = 'PDF:ModificationPermissions';

    protected string $name = 'ModificationPermissions';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Modification Permissions',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::TransformParams
             * line : 182780
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PDF::TransformParams.PDF:ModificationPermissions',
            'desc' => [
                'en' => 'Modification Permissions',
            ],
        ],
    ];

    protected int $count = 0;
}
