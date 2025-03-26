<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LookupTable extends AbstractTagGroup
{
    protected string $id = 'IPTC:LookupTable';

    protected string $name = 'LookupTable';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lookup Table',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::NewsPhoto
             * line : 104506
             * type : ?
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'IPTC::NewsPhoto.IPTC:LookupTable',
            'desc' => [
                'en' => 'Lookup Table',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
