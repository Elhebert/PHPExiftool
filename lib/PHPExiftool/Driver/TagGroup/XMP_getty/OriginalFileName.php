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
class OriginalFileName extends AbstractTagGroup
{
    protected string $id = 'XMP-getty:OriginalFileName';

    protected string $name = 'OriginalFileName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Original File Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::GettyImages
             * line : 281365
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::GettyImages.XMP-getty:OriginalFileName',
            'desc' => [
                'en' => 'Original File Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
