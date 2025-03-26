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
class XAttrLastUsedDate extends AbstractTagGroup
{
    protected string $id = 'MacOS:XAttrLastUsedDate';

    protected string $name = 'XAttrLastUsedDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MacOS::XAttr
             * line : 173116
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MacOS::XAttr.MacOS:XAttrLastUsedDate',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
