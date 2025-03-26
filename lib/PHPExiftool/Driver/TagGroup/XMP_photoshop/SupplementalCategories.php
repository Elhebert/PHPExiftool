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
class SupplementalCategories extends AbstractTagGroup
{
    protected string $id = 'XMP-photoshop:SupplementalCategories';

    protected string $name = 'SupplementalCategories';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Supplemental Categories',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::photoshop
             * line : 289809
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::photoshop.XMP-photoshop:SupplementalCategories',
            'desc' => [
                'en' => 'Supplemental Categories',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
