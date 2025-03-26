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
class YResolution extends AbstractTagGroup
{
    protected string $id = 'Font:YResolution';

    protected string $name = 'YResolution';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Y Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PFM
             * line : 88837
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:YResolution',
            'desc' => [
                'en' => 'Y Resolution',
            ],
        ],
    ];

    protected int $count = 0;
}
