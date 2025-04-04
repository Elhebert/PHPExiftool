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
class Publisher extends AbstractTagGroup
{
    protected string $id = 'XMP-dc:Publisher';

    protected string $name = 'Publisher';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Publisher',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::dc
             * line : 287689
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::dc.XMP-dc:Publisher',
            'desc' => [
                'en' => 'Publisher',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
