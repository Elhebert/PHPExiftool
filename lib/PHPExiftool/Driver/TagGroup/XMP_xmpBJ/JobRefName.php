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
class JobRefName extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpBJ:JobRefName';

    protected string $name = 'JobRefName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Job Ref Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpBJ
             * line : 290991
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpBJ.XMP-xmpBJ:JobRefName',
            'desc' => [
                'en' => 'Job Ref Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
