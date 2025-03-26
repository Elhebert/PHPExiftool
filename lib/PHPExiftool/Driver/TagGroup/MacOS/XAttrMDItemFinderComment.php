<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MacOS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XAttrMDItemFinderComment extends AbstractTagGroup
{
    protected string $id = 'MacOS:XAttrMDItemFinderComment';

    protected string $name = 'XAttrMDItemFinderComment';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'X Attr MD Item Finder Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MacOS::XAttr
             * line : 119147
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MacOS::XAttr.MacOS:XAttrMDItemFinderComment',
            'desc' => [
                'en' => 'X Attr MD Item Finder Comment',
            ],
        ],
    ];

    protected int $count = 0;
}
