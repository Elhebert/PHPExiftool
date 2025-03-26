<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpBJ;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JobRefId extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpBJ:JobRefId';

    protected string $name = 'JobRefId';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Job Ref Id',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpBJ
             * line : 290988
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpBJ.XMP-xmpBJ:JobRefId',
            'desc' => [
                'en' => 'Job Ref Id',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
