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
class Strikeout extends AbstractTagGroup
{
    protected string $id = 'Font:Strikeout';

    protected string $name = 'Strikeout';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Strikeout',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PFM
             * line : 88858
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:Strikeout',
            'desc' => [
                'en' => 'Strikeout',
            ],
        ],
    ];

    protected int $count = 0;
}
