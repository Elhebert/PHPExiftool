<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Track_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NullMediaHeader extends AbstractTagGroup
{
    protected string $id = 'Track#:NullMediaHeader';

    protected string $name = 'NullMediaHeader';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::MediaInfo
             * line : 323914
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'QuickTime::MediaInfo.Track#:NullMediaHeader',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
