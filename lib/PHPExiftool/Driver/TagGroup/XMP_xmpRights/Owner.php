<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpRights;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Owner extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpRights:Owner';

    protected string $name = 'Owner';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Owner',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpRights
             * line : 292372
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::xmpRights.XMP-xmpRights:Owner',
            'desc' => [
                'en' => 'Owner',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
