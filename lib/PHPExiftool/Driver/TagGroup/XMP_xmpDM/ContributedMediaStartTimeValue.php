<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContributedMediaStartTimeValue extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:ContributedMediaStartTimeValue';

    protected string $name = 'ContributedMediaStartTimeValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 413024
             * type : integer
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:ContributedMediaStartTimeValue',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
