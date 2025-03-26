<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Category extends AbstractTagGroup
{
    protected string $id = 'XMP-photoshop:Category';

    protected string $name = 'Category';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Category',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::photoshop
             * line : 289735
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::photoshop.XMP-photoshop:Category',
            'desc' => [
                'en' => 'Category',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
