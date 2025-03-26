<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Custom4 extends AbstractTagGroup
{
    protected string $id = 'XMP-plus:Custom4';

    protected string $name = 'Custom4';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Custom 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PLUS::XMP
             * line : 183412
             * type : lang-alt
             * writable : true
             * count :
             * flags : bag,list
             */
            'id' => 'PLUS::XMP.XMP-plus:Custom4',
            'desc' => [
                'en' => 'Custom 4',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
