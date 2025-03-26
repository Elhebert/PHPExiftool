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
class Creator extends AbstractTagGroup
{
    protected string $id = 'XMP-dc:Creator';

    protected string $name = 'Creator';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Creator',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::dc
             * line : 287671
             * type : string
             * writable : true
             * count :
             * flags : list,seq
             */
            'id' => 'XMP::dc.XMP-dc:Creator',
            'desc' => [
                'en' => 'Creator',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
