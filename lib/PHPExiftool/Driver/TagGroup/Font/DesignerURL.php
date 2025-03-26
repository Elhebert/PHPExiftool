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
class DesignerURL extends AbstractTagGroup
{
    protected string $id = 'Font:DesignerURL';

    protected string $name = 'DesignerURL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Designer URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::Name
             * line : 88791
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Name.Font:DesignerURL',
            'desc' => [
                'en' => 'Designer URL',
            ],
        ],
    ];

    protected int $count = 0;
}
