<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_getty;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ParentMEID extends AbstractTagGroup
{
    protected string $id = 'XMP-getty:ParentMEID';

    protected string $name = 'ParentMEID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Parent MEID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GettyImages
             * line : 281371
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::GettyImages.XMP-getty:ParentMEID',
            'desc' => [
                'en' => 'Parent MEID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
