<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailPNG extends AbstractTagGroup
{
    protected string $id = 'UserData:ThumbnailPNG';

    protected string $name = 'ThumbnailPNG';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::UserData
             * line : 325673
             * type : string
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::UserData.UserData:ThumbnailPNG',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
