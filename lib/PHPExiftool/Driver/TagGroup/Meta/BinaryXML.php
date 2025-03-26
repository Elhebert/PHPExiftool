<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BinaryXML extends AbstractTagGroup
{
    protected string $id = 'Meta:BinaryXML';

    protected string $name = 'BinaryXML';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Binary XML',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Meta
             * line : 228906
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::Meta.Meta:BinaryXML',
            'desc' => [
                'en' => 'Binary XML',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
