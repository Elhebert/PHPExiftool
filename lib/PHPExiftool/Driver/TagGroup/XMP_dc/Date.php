<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Date extends AbstractTagGroup
{
    protected string $id = 'XMP-dc:Date';

    protected string $name = 'Date';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::dc
             * line : 287674
             * type : date
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::dc.XMP-dc:Date',
            'desc' => [
                'en' => 'Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
