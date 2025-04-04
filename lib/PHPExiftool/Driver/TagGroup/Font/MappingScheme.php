<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MappingScheme extends AbstractTagGroup
{
    protected string $id = 'Font:MappingScheme';

    protected string $name = 'MappingScheme';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Mapping Scheme',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::AFM
             * line : 88723
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::AFM.Font:MappingScheme',
            'desc' => [
                'en' => 'Mapping Scheme',
            ],
        ],
    ];

    protected int $count = 0;
}
