<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PageMode extends AbstractTagGroup
{
    protected string $id = 'PDF:PageMode';

    protected string $name = 'PageMode';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Page Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::Root
             * line : 182710
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PDF::Root.PDF:PageMode',
            'desc' => [
                'en' => 'Page Mode',
            ],
        ],
    ];

    protected int $count = 0;
}
