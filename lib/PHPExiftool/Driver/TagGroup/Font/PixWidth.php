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
class PixWidth extends AbstractTagGroup
{
    protected string $id = 'Font:PixWidth';

    protected string $name = 'PixWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Pix Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PFM
             * line : 88867
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:PixWidth',
            'desc' => [
                'en' => 'Pix Width',
            ],
        ],
    ];

    protected int $count = 0;
}
