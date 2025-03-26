<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WM_CollectionGroupID extends AbstractTagGroup
{
    protected string $id = 'ID3:WM_CollectionGroupID';

    protected string $name = 'WM_CollectionGroupID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WM Collection Group ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::Private
             * line : 102178
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::Private.ID3:WM_CollectionGroupID',
            'desc' => [
                'en' => 'WM Collection Group ID',
            ],
        ],
    ];

    protected int $count = 0;
}
