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
class ItalicAngle extends AbstractTagGroup
{
    protected string $id = 'Font:ItalicAngle';

    protected string $name = 'ItalicAngle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Italic Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PSInfo
             * line : 88919
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PSInfo.Font:ItalicAngle',
            'desc' => [
                'en' => 'Italic Angle',
            ],
        ],
    ];

    protected int $count = 0;
}
