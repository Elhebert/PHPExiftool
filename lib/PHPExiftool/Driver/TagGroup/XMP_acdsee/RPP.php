<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_acdsee;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RPP extends AbstractTagGroup
{
    protected string $id = 'XMP-acdsee:RPP';

    protected string $name = 'RPP';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'RPP',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::acdsee
             * line : 281625
             * type : lang-alt
             * writable : true
             * count :
             * flags : avoid,binary
             */
            'id' => 'XMP::acdsee.XMP-acdsee:RPP',
            'desc' => [
                'en' => 'RPP',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2051;
}
