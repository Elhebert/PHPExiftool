<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DerivedImageRef extends AbstractTagGroup
{
    protected string $id = 'QuickTime:DerivedImageRef';

    protected string $name = 'DerivedImageRef';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Derived Image Ref',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemRef
             * line : 228561
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemRef.QuickTime:DerivedImageRef',
            'desc' => [
                'en' => 'Derived Image Ref',
            ],
        ],
    ];

    protected int $count = 0;
}
