<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CorporateEntity extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:CorporateEntity';

    protected string $name = 'CorporateEntity';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Corporate Entity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290079
             * type : string
             * writable : true
             * count :
             * flags : avoid,bag,list
             */
            'id' => 'XMP::prism.XMP-prism:CorporateEntity',
            'desc' => [
                'en' => 'Corporate Entity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2369;
}
