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
class ContributedMediaManaged extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpDM:ContributedMediaManaged';

    protected string $name = 'ContributedMediaManaged';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contributed Media Managed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpDM
             * line : 291169
             * type : boolean
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpDM.XMP-xmpDM:ContributedMediaManaged',
            'desc' => [
                'en' => 'Contributed Media Managed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
