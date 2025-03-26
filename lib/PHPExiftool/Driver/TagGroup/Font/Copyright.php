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
class Copyright extends AbstractTagGroup
{
    protected string $id = 'Font:Copyright';

    protected string $name = 'Copyright';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Copyright',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::Name
             * line : 88755
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Name.Font:Copyright',
            'desc' => [
                'en' => 'Copyright',
            ],
        ],
        1 => [
            /**
             * table_name : Font::PFM
             * line : 88828
             * type : string
             * writable : false
             * count : 60
             * flags :
             */
            'id' => 'Font::PFM.Font:Copyright',
            'desc' => [
                'en' => 'Copyright',
            ],
        ],
        2 => [
            /**
             * table_name : Font::PSInfo
             * line : 88901
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::PSInfo.Font:Copyright',
            'desc' => [
                'en' => 'Copyright',
            ],
        ],
    ];

    protected int $count = 60;
}
