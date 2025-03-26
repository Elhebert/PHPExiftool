<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CharacterSet extends AbstractTagGroup
{
    protected string $id = 'PhotoCD:CharacterSet';

    protected string $name = 'CharacterSet';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Character Set',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhotoCD::Main
             * line : 211030
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PhotoCD::Main.PhotoCD:CharacterSet',
            'desc' => [
                'en' => 'Character Set',
            ],
        ],
    ];

    protected int $count = 0;
}
