<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MajorBrand extends AbstractTagGroup
{
    protected string $id = 'Jpeg2000:MajorBrand';

    protected string $name = 'MajorBrand';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Major Brand',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Jpeg2000::FileType
             * line : 105732
             * type : undef
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'Jpeg2000::FileType.Jpeg2000:MajorBrand',
            'desc' => [
                'en' => 'Major Brand',
            ],
        ],
    ];

    protected int $count = 4;
}
