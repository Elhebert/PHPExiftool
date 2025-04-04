<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dex;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShortDescription extends AbstractTagGroup
{
    protected string $id = 'XMP-dex:ShortDescription';

    protected string $name = 'ShortDescription';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Short Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::dex
             * line : 287758
             * type : lang-alt
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::dex.XMP-dex:ShortDescription',
            'desc' => [
                'en' => 'Short Description',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
