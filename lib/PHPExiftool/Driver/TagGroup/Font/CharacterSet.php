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
class CharacterSet extends AbstractTagGroup
{
    protected string $id = 'Font:CharacterSet';

    protected string $name = 'CharacterSet';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Character Set',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::AFM
             * line : 88690
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::AFM.Font:CharacterSet',
            'desc' => [
                'en' => 'Character Set',
            ],
        ],
        1 => [
            /**
             * table_name : Font::PFM
             * line : 88864
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:CharacterSet',
            'desc' => [
                'en' => 'Character Set',
            ],
        ],
    ];

    protected int $count = 0;
}
