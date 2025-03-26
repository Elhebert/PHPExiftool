<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrimaryItemReference extends AbstractTagGroup
{
    protected string $id = 'Meta:PrimaryItemReference';

    protected string $name = 'PrimaryItemReference';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Meta
             * line : 323940
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Meta.Meta:PrimaryItemReference',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Meta
             * line : 323943
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Meta.Meta:PrimaryItemReference',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
