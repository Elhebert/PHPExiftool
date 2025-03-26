<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcCore;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectCode extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcCore:SubjectCode';

    protected string $name = 'SubjectCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Subject Code',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcCore
             * line : 288876
             * type : string
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'XMP::iptcCore.XMP-iptcCore:SubjectCode',
            'desc' => [
                'en' => 'Subject Code',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
