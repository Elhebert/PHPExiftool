<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class URL_List extends AbstractTagGroup
{
    protected string $id = 'Photoshop:URL_List';

    protected string $name = 'URL_List';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'URL List',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 212337
             * type : ?
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'Photoshop::Main.Photoshop:URL_List',
            'desc' => [
                'en' => 'URL List',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 64;
}
