<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ics;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LabelName6 extends AbstractTagGroup
{
    protected string $id = 'XMP-ics:LabelName6';

    protected string $name = 'LabelName6';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Label Name 6',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::ics
             * line : 288815
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::ics.XMP-ics:LabelName6',
            'desc' => [
                'en' => 'Label Name 6',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
