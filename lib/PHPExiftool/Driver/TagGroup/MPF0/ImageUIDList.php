<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPF0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageUIDList extends AbstractTagGroup
{
    protected string $id = 'MPF0:ImageUIDList';

    protected string $name = 'ImageUIDList';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image UID List',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MPF::Main
             * line : 113047
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'MPF::Main.MPF0:ImageUIDList',
            'desc' => [
                'en' => 'Image UID List',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
