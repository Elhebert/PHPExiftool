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
class DefaultChar extends AbstractTagGroup
{
    protected string $id = 'Font:DefaultChar';

    protected string $name = 'DefaultChar';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Default Char',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::PFM
             * line : 88888
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PFM.Font:DefaultChar',
            'desc' => [
                'en' => 'Default Char',
            ],
        ],
    ];

    protected int $count = 0;
}
